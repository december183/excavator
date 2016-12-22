$(function(){
    $('tr.submenu').hide();
    $('#table-info>tbody>tr>td>button').click(function(){
        if($(this).parent().parent().nextUntil('tr.topmenu').css('display') == 'none'){
            $(this).removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
            $(this).parent().parent().nextUntil('tr.topmenu').show();
        }else{
            $(this).removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
            $(this).parent().parent().nextUntil('tr.topmenu').hide();
        }
        /*$(this).parent().parent().nextUntil('tr.topmenu').toggle();*/
    });
});
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
                obj.parent().parent().nextUntil('tr.topmenu').remove();
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
function setSort(id,obj){
    var obj=$(obj);
    var sort=obj.val();
    $.ajax({
        url:'setSort',
        data:{id:id,sort:sort},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                obj.val(sort);
            }else{
                alert(res.message);
            }
        }
    });
}
