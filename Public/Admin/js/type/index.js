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
function ajaxDel(id,obj){
    if(!confirm('你确定要删除吗?')){
        return true;
    }
    var obj=$(obj);
    $.ajax({
        url:'del',
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
        url:'setStatus',
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