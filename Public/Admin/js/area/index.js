$(function(){
    $('#searchbtn').click(function(){
        var keywords=$('#keywords').val();
        if(keywords == ''){
            alert('请输入地区关键词');
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
            html+='<td><input type="checkbox" name="ids[]" value="'+info.areano+'"></td>';
            html+='<td>'+info.areano+'</td>';
            html+='<td>'+info.areaname+'</td>';
            html+='<td>'+info.parentno+'</td>';
            html+='<td>'+info.areacode+'</td>';
            html+='<td>'+info.arealevel+'</td>';
            html+='<td>'+info.typename+'</td>';
            html+='</tr>';
        }
        $('#table-info>tbody').html(html);
        $('#page >ul').html(page);
    }else{
        alert(jsonObj.message);
    }
}