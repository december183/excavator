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
        url:'Home/Collect/del',
        data:{id:id},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                // obj.parent().parent().remove();
            }else{
                alert(res.message);
            }
        }
    });
}
function setNum(id,obj){
    var obj=$(obj);
    var num=obj.val();
    $.ajax({
        url:'Home/Cart/setNum',
        data:{id:id,num:num},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                alert(res.message);
                obj.val(num);
            }
        }
    });
}
