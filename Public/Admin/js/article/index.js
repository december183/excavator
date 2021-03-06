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
        $.ajax({
            url:'Admin/Article/ajaxSearch',
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
        url:'Admin/Article/ajaxSearch',
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
            if(info.isrec == 1){
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">已推荐</a>';
            }else{
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">未推荐</a>';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumbpic+'" class="img-rounded"></a></td>';
            html+='<td>'+info.title+'</td>';
            html+='<td>'+info.tags+'</td>';
            html+='<td>'+info.descript+'</td>';
            html+='<td>'+isrec+'</td>';
            html+='<td><a href="index.php?s=Admin/Article/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
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
        url:'Admin/Article/del',
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
        url:'Admin/Article/setRec',
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