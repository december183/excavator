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
            url:'Admin/Attr/ajaxSearch',
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
        url:'Admin/Attr/ajaxSearch',
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
            if(info.is_sku == 1){
                var is_sku='是';
            }else{
                var is_sku='否';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td>'+info.name+'</td>';
            html+='<td>'+info.catename+'</td>';
            html+='<td>'+info.typename+'</td>';
            html+='<td>'+info.value+'</td>';
            html+='<td>'+is_sku+'</td>';
            html+='<td><a href="index.php?s=Admin/Attr/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
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
        url:'Admin/Attr/del',
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