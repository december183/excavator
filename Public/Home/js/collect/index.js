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
    $('#typeid').change(function(){
        var type=$(this).val();
        var cateid=$('#cateid').val();
        var page=1;
        ajaxSearch(type,cateid,page);
    });
    $('#typeid').change(function(){
        var type=$(this).val();
        var cateid=$('#cateid').val();
        var page=1;
        ajaxSearch(type,cateid,page);
    });
});
function ajaxPage(obj){
    var page=$(obj).attr('data-page');
    var cateid=$('#cateid').val();
    var type=$('#typeid').val();
    ajaxSearch(type,cateid,page);
};
function ajaxSearch(type,cateid,page){
    $.ajax({
        url:'Home/Collect/ajaxSearch',
        data:{cateid:cateid,type:type,p:page},
        type:'get',
        dataType:'json',
        success:function(res){
            getData(res);
        }
    });
}

function getData(){
    if(jsonObj.status == 200){
        var page=jsonObj.data.page;
        var html='';
        for(key in jsonObj.data.list){
            var info=jsonObj.data.list[key];
            html+='<li>';
            html+='';
            html+='</li>';
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