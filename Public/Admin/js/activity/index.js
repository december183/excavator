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
        var cateid=$('#cateid').val();
        var type=$('#typeid').val();
        if(keywords == '' && cateid == 0 && type == 0){
            alert('请输入关键词或选择活动类型');
            return;
        }
        $.ajax({
            url:'Admin/Activity/ajaxSearch',
            data:{keywords:keywords,cateid:cateid,type:type},
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
    var cateid=$('#cateid').val();
    var type=$('#typeid').val();
    $.ajax({
        url:'Admin/Activity/ajaxSearch',
        data:{keywords:keywords,cateid:cateid,type:type,p:page},
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
            if(info.isrec == 1){
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">已推荐</a>';
            }else{
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">未推荐</a>';
            }
            if(info.status == 0){
                var status='已结束';
            }else if(info.status == 1){
                var status='未开始';
            }else{
                var status='进行中';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumbpic+'" class="img-rounded"></a></td>';
            html+='<td>'+info.title+'</td>';
            html+='<td>'+info.descript+'</td>';
            html+='<td>'+info.starttime+'</td>';
            html+='<td>'+info.endtime+'</td>';
            html+='<td>'+status+'</td>';
            html+='<td>'+isrec+'</td>';
            html+='<td><a href="index.php?s=Admin/Activity/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
            html+='</tr>';
        }
        $('#table-info>tbody').html(html);
        $('#page >ul').html(page);
    }else{
        alert(jsonObj.message);
    }
}
function ajaxDel(id,obj){
    if(!confirm('你确定要删除吗?')){
        return true;
    }
    var obj=$(obj);
    $.ajax({
        url:'Admin/Activity/del',
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
function setRec(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'Admin/Activity/setRec',
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