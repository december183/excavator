$(function(){
    var options={
        url:'',
        type:'post',
        dataType:'json',
        beforeSubmit:showRequest,
        success:function (res) {
            alert(res.message);
            if (res.status == 200) {
                window.location.href = res.data.url;
            }
        }
    };
    $('#ajaxForm').ajaxForm(options);
});
function showRequest(formData) {
    // formdata是数组对象,在这里，我们使用$.param()方法把他转化为字符串.
    var queryString = $.param(formData); //组装数据，插件会自动提交数据
    return true;
}
$(function(){
    $('#cateid').change(function(){
        var cateid=$(this).val();
        getBrand(cateid);
    });
});
function getBrand(cateid){
    if(cateid == 0){
        $('#brandid').html('<option value="0">选择相关品牌</option>');
        return;
    }
    $.ajax({
        url:'Admin/Brand/getBrand',
        data:{cateid:cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            var html='';
            html+='<option value="0">选择相关品牌</option>';
            if(res.status == 200){
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    html+='<option value="'+info.id+'">'+info.name+'</option>';
                }
            }
            $('#brandid').html(html);
        }
    });
}
function getCurBrand(cateid,brand){
    if(cateid == 0){
        $('#brandid').html('<option value="0">选择相关品牌</option>');
        return;
    }
    $.ajax({
        url:'Admin/Brand/getBrand',
        data:{cateid:cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            var html='';
            html+='<option value="0">选择相关品牌</option>';
            if(res.status == 200){
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    if(brand == info.id){
                        html+='<option value="'+info.id+'" selected="selected">'+info.name+'</option>';
                    }else{
                        html+='<option value="'+info.id+'">'+info.name+'</option>';
                    }
                }
            }
            $('#brandid').html(html);
        }
    });
}
$(function(){
    $('#searchbtn').click(function(){
        var keywords=$('#keywords').val();
        var cateid=$('#cateid').val();
        var brand=$('#brandid').val();
        if(keywords == '' && cateid == 0 && brand == 0){
            alert('请输入关键词或选择配件类型与相关品牌');
            return;
        }
        $.ajax({
            url:'Admin/Accessory/ajaxSearch',
            data:{keywords:keywords,cateid:cateid,brand:brand},
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
    var brand=$('#brandid').val();
    $.ajax({
        url:'Admin/Accessory/ajaxSearch',
        data:{keywords:keywords,cateid:cateid,brand:brand,p:page},
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
            html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+info.thumbpic+'" class="img-rounded"></a></td>';
            html+='<td>'+info.accesno+'</td>';
            html+='<td>'+info.catename+'</td>';
            html+='<td>'+info.brandname+'</td>';
            html+='<td>'+info.machineno+'</td>';
            html+='<td><a href="index.php?s=Admin/Accessory/edit/id/'+info.id+'" title="编辑"><i class="fa fa-edit text-success text"></i></a>　<a onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
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
        url:'Admin/Accessory/del',
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