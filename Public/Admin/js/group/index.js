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
        if(keywords == ''){
            alert('请输入关键词');
            $('#keywords').focus();
            return;
        }
        $.ajax({
            url:'Admin/Group/ajaxSearch',
            data:{keywords:keywords},
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
    $.ajax({
        url:'Admin/Group/ajaxSearch',
        data:{keywords:keywords,p:page},
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
                var status='<a href="#" onclick="setStatus('+info.id+',this)">已启用</a>';
            }else{
                var status='<a href="#" onclick="setStatus('+info.id+',this)">已禁用</a>';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td>'+info.name+'</td>';
            html+='<td>'+info.auth+'</td>';
            html+='<td>'+status+'</td>';
            html+='<td><a href="Admin/Goods/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a href="javascript:;" onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
            html+='</tr>';
        }
        $('#table-info>tbody').html(html);
        $('#page >ul').html(page);
    }else{
        alert(jsonObj.message);
    }
}
function ajaxDel(id,obj){
    if(!confirm('你确定要删除这个管理组吗?')){
        return true;
    }
    var obj=$(obj);
    $.ajax({
        url:'Admin/Group/del',
        data:{id:id},
        type:'get',
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
        url:'Admin/Group/setStatus',
        data:{id:id},
        type:'get',
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
