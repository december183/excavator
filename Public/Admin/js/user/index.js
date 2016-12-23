$(function(){
    var options={
        url:'',
        data: $('#ajaxForm').serialize(),
        type:'post',
        dataType:'json',
        success:function (res) {
            alert(res.message);
            if (res.status == 200) {
                window.location.href = res.data.url;
            }
        }
    };
    $('#ajaxForm').ajaxForm(options);
});
$(function(){
    $('#searchbtn').click(function(){
        var keywords=$('#keywords').val();
        var type=$('#typeid').val();
        if(keywords == '' && type == 0){
            alert('请输入关键词或选择用户类型');
            return;
        }
        $.ajax({
            url:'Admin/User/ajaxSearch',
            data:{keywords:keywords,type:type},
            type:'get',
            dataType:'json',
            success:function(res){
                getData(res);
            }
        });
    });
});
function ajaxPage(obj){
    var page=$(obj).attr('data-page');
    var keywords=$('#keywords').val();
    var type=$('#typeid').val();
    $.ajax({
        url:'Admin/User/ajaxSearch',
        data:{keywords:keywords,type:type,p:page},
        type:'get',
        dataType:'json',
        success:function(res){
            getData(res);
        }
    });
};
function getData(jsonObj){
    if(jsonObj.status == 200){
        var page=jsonObj.data.page;
        var html='';
        for(key in jsonObj.data.list){
            var info=jsonObj.data.list[key];
            if(info.status == 1){
                var status='<a href="#" onclick="setStatus('+info.id+',this)"><span class="text-primary text">正常</span></a>';
            }else{
                var status='<a href="#" onclick="setStatus('+info.id+',this)"><span class="text-danger text">已禁用</span></a>';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumb+'" class="img-rounded"></a></td>';
            html+='<td>'+info.name+'</td>';
            html+='<td>'+info.phone+'</td>';
            html+='<td>'+info.areaname+'</td>';
            html+='<td>'+info.credit+'</td>';
            html+='<td>'+info.account+'</td>';
            html+='<td>'+info.wechat+'</td>';
            html+='<td>'+info.alipay+'</td>';
            html+='<td>'+status+'</td>';
            html+='<td><a href="javascript:;" onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
            html+='</tr>';
        }
        $('#table-info>tbody').html(html);
        $('#page >ul').html(page);
    }else{
        alert(jsonObj.message);
    }
}
function ajaxDel(id,obj){
    if(!confirm('你确定要删除这个用户吗?')){
        return true;
    }
    var obj=$(obj);
    $.ajax({
        url:'Admin/User/del',
        data:{id:id},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                obj.parent().parent().remove();
            }else{
                alert(res.message);
            }
        }
    });
}
function setStatus(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'Admin/User/setStatus',
        data:{id:id},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                obj.text(res.message);
            }else{
                alert(res.message);
            }
        }
    });
}
