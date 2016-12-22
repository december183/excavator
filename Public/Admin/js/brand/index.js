$(function(){
    $('.top-cate').click(function(){
        var flag=$(this).children().is(':checked');
        if(flag){
            $(this).nextUntil('.top-cate').children().prop('checked',true);
        }else{
            $(this).nextUntil('.top-cate').children().prop('checked',false);
        }
    });
    $('.sub-cate').click(function(){
        var flag=$(this).children().is(':checked');
        if(flag){
            var nextDom=$(this).nextUntil('.top-cate');
            // console.log(nextDom);
            var prevDom=$(this).prevUntil('.top-cate');
            if(nextDom){
                for(var i=0;i<nextDom.length;i++){
                    flag=nextDom.eq(i).children().is(':checked');
                    if(flag == false){
                        return;
                    }
                }
            }
            if(nextDom){
                for(var i=0;i<prevDom.length;i++){
                    flag=prevDom.eq(i).children().is(':checked');
                    if(flag == false){
                        return;
                    }
                }
            }
            $(this).prevAll('.top-cate').eq(0).children().prop('checked',true);
        }else{
            $(this).prevAll('.top-cate').eq(0).children().prop('checked',false);
        }
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
$(function(){
    $('#searchbtn').click(function(){
        var keywords=$('#keywords').val();
        if(keywords == ''){
            alert('请输入关键词');
            $('#keywords').focus();
            return;
        }
        $.ajax({
            url:'ajaxSearch',
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
        url:'ajaxSearch',
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
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumb+'" class="img-rounded"></a></td>';
            html+='<td>'+info.name+'</td>';
            html+='<td>'+info.catename+'</td>';
            html+='<td><input type="text" name="sort['+info.id+']" class="form-control short" value="'+info.sort+'" onblur="setSort('+info.id+',this);"></td>';
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
                alert(res.message);
                obj.val(sort);
            }
        }
    });
}