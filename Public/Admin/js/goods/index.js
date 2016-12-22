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
        $.ajax({
            url:'ajaxSearch',
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
        url:'ajaxSearch',
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
            if(info.status == 1){
                var status='<a href="#" onclick="setStatus('+info.id+',this)">已启用</a>';
            }else{
                var status='<a href="#" onclick="setStatus('+info.id+',this)">已禁用</a>';
            }
            if(info.isup == 1){
                var isup='<a href="#" onclick="setUp('+info.id+',this)">已上架</a>';
            }else{
                var isup='<a href="#" onclick="setUp('+info.id+',this)">已下架</a>';
            }
            if(info.isrec == 1){
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">已推荐</a>';
            }else{
                var isrec='<a href="#" onclick="setRec('+info.id+',this)">未推荐</a>';
            }
            if(info.isfreight == 1){
                var isfreight='是';
            }else{
                var isfreight='否';
            }
            if(info.isdiscount == 1){
                var isdiscount='是';
            }else{
                var isdiscount='否';
            }
            if(info.ishot == 1){
                var ishot='是';
            }else{
                var ishot='否';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumbpic+'" class="img-rounded"></a></td>';
            html+='<td>'+info.title+'</td>';
            html+='<td>'+info.tags+'</td>';
            html+='<td>'+info.brandname+'</td>';
            html+='<td>'+info.price+'</td>';
            html+='<td>'+info.inventory+'</td>';
            html+='<td>'+info.hits+'</td>';
            html+='<td>'+isfreight+'</td>';
            html+='<td>'+isdiscount+'</td>';
            html+='<td>'+ishot+'</td>';
            html+='<td>'+isup+'</td>';
            html+='<td>'+isrec+'</td>';
            html+='<td>'+status+'</td>';
            html+='<td><a href="edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a href="javascript:;" onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
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
function setUp(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'setUp',
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
function setRec(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'setRec',
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