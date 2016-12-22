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
            url:'ajaxSearch',
            data:{keywords:keywords,type:type},
            type:'get',
            dataType:'json',
            success:function(res){
                getData(res);
            }
        });
    });
});
$(function(){
    var type=$('#adverType').val();
    getTypeInfo(type);
    $('#adverType').change(function(){
        var type=$(this).val();
        getTypeInfo(type);
    });
});
function getTypeInfo(type){
    $.ajax({
        url:'../AdverType/getTypeInfo',
        data:{'id':type},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                $('.adverWidth').val(res.data.width);
                $('.adverHeight').val(res.data.height);
            }else{
                $('.adverWidth').val('');
                $('.adverHeight').val('');
            }
        }
    });
}
function ajaxPage(obj){
    var page=$(obj).attr('data-page');
    var keywords=$('#keywords').val();
    var type=$('#typeid').val();
    $.ajax({
        url:'ajaxSearch',
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
                var status='<a href="#" onclick="setRec('+info.id+',this)">展示中</a>';
            }else{
                var status='<a href="#" onclick="setRec('+info.id+',this)">未展示</a>';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.pic+'" class="img-rounded"></a></td>';
            html+='<td>'+info.title+'</td>';
            html+='<td>'+info.linkurl+'</td>';
            html+='<td><input type="text" name="sort['+info.id+']" class="form-control short" value="'+info.sort+'" onblur="setSort('+info.id+',this);"></td>';
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
function setSort(id,obj){
    var obj=$(obj);
    var sort=obj.val();
    $.ajax({
        url:'setSort',
        data:{id:id,sort:sort},
        type:'post',
        dataType:'json',
        success:function(res){
            // alert(res.message);
            if(res.status == 200){
                obj.val(sort);
            }
        }
    });
}