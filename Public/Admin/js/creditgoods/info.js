$(function(){
    $('#cateid').change(function(){
        var cateid=$(this).val();
        getBrand(cateid);
        getAttr(cateid);
    });
});
function getBrand(cateid){
    if(cateid == 0){
        $('#brand').html('');
        $('#attr').html('');
        return;
    }
    $.ajax({
        url:'Admin/Brand/getBrand',
        data:{"cateid":cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                var html='';
                html+='<div class="form-group">';
                html+='<label class="col-lg-2 control-label">商品品牌</label>';
                html+='<div class="col-lg-4">';
                html+='<select name="brand" class="form-control m-b">';
                html+='<option value="0">---请选择品牌---</option>';
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    html+='<option value="'+info.id+'">'+info.name+'</option>';
                }
                html+='</select>';
                html+='</div>';
                html+='<div class="col-lg-6"></div>';
                html+='</div>';
                $('#brand').html(html);
            }else{
                $('#brand').html('');
            }
        }
    });
}
function getCurBrand(cateid,brand){
    if(cateid == 0){
        $('#brand').html('');
        $('#attr').html('');
        return;
    }
    $.ajax({
        url:'Admin/Brand/getBrand',
        data:{"cateid":cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                var html='';
                html+='<div class="form-group">';
                html+='<label class="col-lg-2 control-label">商品品牌</label>';
                html+='<div class="col-lg-4">';
                html+='<select name="brand" class="form-control m-b">';
                html+='<option value="0">---请选择品牌---</option>';
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    if(brand == info.id){
                        html+='<option value="'+info.id+'" selected="selected">'+info.name+'</option>';
                    }else{
                        html+='<option value="'+info.id+'">'+info.name+'</option>';
                    }
                }
                html+='</select>';
                html+='</div>';
                html+='<div class="col-lg-6"></div>';
                html+='</div>';
                $('#brand').html(html);
            }else{
                $('#brand').html('');
            }
        }
    });
}
function getAttr(cateid){
    if(cateid == 0){
        $('#brand').html('');
        $('#attr').html('');
        return;
    }
    $.ajax({
        url:'Admin/Attr/getAttr',
        data:{"cateid":cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                var html='';
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    if(info.type == 1){
                        html+='<div class="form-group">';
                        html+='<label class="col-lg-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-lg-6">';
                        html+='<input type="text" class="form-control" name="attr['+info.id+']">';
                        html+='</div>';
                        html+='<div class="col-lg-4"></div>';
                        html+='</div>';
                    }else if(info.type == 2){
                        var valArr=info.value.split(';');
                        var length=valArr.length;
                        html+='<div class="form-group">';
                        html+='<label class="col-lg-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-lg-4">';
                        html+='<select name="attr['+info.id+']" class="form-control m-b">';
                        for(var i=0;i<length;i++){
                            var arr=valArr[i].split(':');
                            html+='<option value="'+arr[0]+'">'+arr[1]+'</option>';
                        }
                        html+='</select>';
                        html+='</div>';
                        html+='<div class="col-lg-6"></div>';
                        html+='</div>';
                    }else if(info.type == 3){
                        var valArr=info.value.split(';');
                        var length=valArr.length;
                        html+='<div class="form-group">';
                        html+='<label class="col-sm-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-sm-10">';
                        for(var i=0;i<length;i++){
                            var arr=valArr[i].split(':');
                            html+='<label class="checkbox-inline">';
                            html+='<input type="checkbox" name="attr['+info.id+']['+i+']" value="'+arr[0]+'"> '+arr[1]+' </label>';
                        }
                        html+='</div>';
                        html+='</div>';
                    }else if(info.type == 4){
                        html+='<div class="form-group">';
                        html+='<label class="col-sm-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-sm-10">';
                        html+='<textarea class="form-control" name="attr['+info.id+']" rows="5" data-minwords="6" data-required="true"></textarea>';
                        html+='</div>';
                        html+='</div>';
                    }
                }
                $('#attr').html(html);
            }else{
                $('#attr').html('');
            }
        }
    });
}
function getCurAttr(cateid,attrstr){
    if(cateid == 0){
        $('#brand').html('');
        $('#attr').html('');
        return;
    }
    var attrstr=eval('('+attrstr+')');
    $.ajax({
        url:'Admin/Attr/getAttr',
        data:{"cateid":cateid},
        type:'post',
        dataType:'json',
        success:function(res){
            if(res.status == 200){
                var html='';
                for(var key=0;key<res.data.length;key++){
                    var info=res.data[key];
                    var k=info.id;
                    if(info.type == 1){
                        html+='<div class="form-group">';
                        html+='<label class="col-lg-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-lg-6">';
                        if(attrstr[k] != ''){
                            html+='<input type="text" class="form-control" name="attr['+info.id+']" value="'+attrstr[k]+'">';
                        }else{
                            html+='<input type="text" class="form-control" name="attr['+info.id+']">';
                        }
                        html+='</div>';
                        html+='<div class="col-lg-4"></div>';
                        html+='</div>';
                    }else if(info.type == 2){
                        var valArr=info.value.split(';');
                        var length=valArr.length;
                        html+='<div class="form-group">';
                        html+='<label class="col-lg-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-lg-4">';
                        html+='<select name="attr['+info.id+']" class="form-control m-b">';
                        if(attrstr[k] != ''){
                            for(var i=0;i<length;i++){
                                var arr=valArr[i].split(':');
                                if(attrstr[k] == arr[0]){
                                    html+='<option value="'+arr[0]+'" selected="selected">'+arr[1]+'</option>';
                                }else{
                                    html+='<option value="'+arr[0]+'">'+arr[1]+'</option>';
                                }
                            }
                        }else{
                            for(var i=0;i<length;i++){
                                var arr=valArr[i].split(':');
                                html+='<option value="'+arr[0]+'">'+arr[1]+'</option>';
                            }
                        }
                        html+='</select>';
                        html+='</div>';
                        html+='<div class="col-lg-6"></div>';
                        html+='</div>';
                    }else if(info.type == 3){
                        var valArr=info.value.split(';');
                        var length=valArr.length;
                        html+='<div class="form-group">';
                        html+='<label class="col-sm-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-sm-10">';
                        if(attrstr[k] != ''){
                            for(var i=0;i<length;i++){
                                var arr=valArr[i].split(':');
                                if(attrstr[k][i] == arr[0]){
                                    html+='<label class="checkbox-inline">';
                                    html+='<input type="checkbox" name="attr['+info.id+']['+i+']" value="'+arr[0]+'" checked="checked"> '+arr[1]+' </label>';
                                }else{
                                    html+='<label class="checkbox-inline">';
                                    html+='<input type="checkbox" name="attr['+info.id+']['+i+']" value="'+arr[0]+'"> '+arr[1]+' </label>';
                                }
                            }
                        }else{
                            for(var i=0;i<length;i++){
                                var arr=valArr[i].split(':');
                                html+='<label class="checkbox-inline">';
                                html+='<input type="checkbox" name="attr['+info.id+']['+i+']" value="'+arr[0]+'"> '+arr[1]+' </label>';
                            }
                        }
                        html+='</div>';
                        html+='</div>';
                    }else if(info.type == 4){
                        html+='<div class="form-group">';
                        html+='<label class="col-sm-2 control-label">'+info.name+'</label>';
                        html+='<div class="col-sm-10">';
                        if(attrstr[k] != ''){
                            html+='<textarea class="form-control" name="attr['+info.id+']" rows="5" data-minwords="6" data-required="true">'+attrstr[k]+'</textarea>';
                        }else{
                            html+='<textarea class="form-control" name="attr['+info.id+']" rows="5" data-minwords="6" data-required="true"></textarea>';
                        }
                        html+='</div>';
                        html+='</div>';
                    }
                }
                $('#attr').html(html);
            }else{
                $('#attr').html('');
            }
        }
    });
}