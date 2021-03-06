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
        if(keywords == '' && cateid == 0){
            alert('请输入关键词或选择商品分类');
            return;
        }
        $.ajax({
            url:'Admin/CreditGoods/ajaxSearch',
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
    $.ajax({
        url:'Admin/CreditGoods/ajaxSearch',
        data:{keywords:keywords,cateid:cateid,p:page},
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
            if(info.isfreight == 1){
                var isfreight='是';
            }else{
                var isfreight='否';
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
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumbpic.substr(0,65)+'" class="img-rounded"></a></td>';
            html+='<td>'+info.title+'</td>';
            html+='<td>'+info.tags+'</td>';
            html+='<td>'+info.brandname+'</td>';
            html+='<td>'+info.credit+'</td>';
            html+='<td>'+info.inventory+'</td>';
            html+='<td>'+info.hits+'</td>';
            html+='<td>'+isfreight+'</td>';
            html+='<td>'+isup+'</td>';
            html+='<td>'+isrec+'</td>';
            html+='<td><a href="index.php?s=/Admin/CreditGoods/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
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
        url:'Admin/CreditGoods/del',
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
/**
 * 删除数组中的指定元素
 * @param val
 */
Array.prototype.remove=function(val){
    var index=this.indexOf(val);
    if(index > -1){
        this.splice(index,1);
    }
};
/**
 * 删除指定商品图片
 * @param obj
 */
function delPic(obj){
    var obj=$(obj);
    var src=obj.children('img').attr('src');
    var mainsrc=src.replace('150x150_thumb','600x600_thumb');
    obj.remove();
    var thumbpic=$('#thumbpic').val();
    var mainpic=$('#mainpic').val();
    var thumbArr=thumbpic.split(';');
    var mainArr=mainpic.split(';');
    if(thumbArr[thumbArr.length-1] == ';'){
        thumbArr.pop();
    }
    if(mainArr[mainArr.length-1] == ';'){
        mainArr.pop();
    }
    thumbArr.remove(src);
    mainArr.remove(mainsrc);
    thumbpic=thumbArr.join(';');
    mainpic=mainArr.join(';');
    $('#thumbpic').val(thumbpic);
    $('#mainpic').val(mainpic);
}
function setUp(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'Admin/CreditGoods/setUp',
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
        url:'Admin/CreditGoods/setRec',
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
