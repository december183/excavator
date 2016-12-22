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
        var starttime=$('#starttime').val();
        var endtime=$('#endtime').val();
        if(keywords == '' && starttime == '' && endtime == ''){
            alert('请输入订单号或起止时间进行查询');
            return;
        }
        $.ajax({
            url:'ajaxSearch',
            data:{keywords:keywords,starttime:starttime,endtime:endtime},
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
    var starttime=$('#starttime').val();
    var endtime=$('#endtime').val();
    $.ajax({
        url:'ajaxSearch',
        data:{keywords:keywords,starttime:starttime,endtime:endtime,p:page},
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
            if(info.status == 0){
                var status='已取消';
            }else if(info.status == 1){
                var status='已完成';
            }else if(info.status == 2){
                var status='待收货';
            }else if(info.status == 3){
                var status='待发货';
            }else{
                var status='待付款';
            }
            if(info.paymethod == 1){
                var method='微信';
            }else{
                var method='支付宝'
            }
            var leng=info.info.length;
            var detail=info.info;
            html+='<tr>';
            html+='<td rowspan="'+info.count+'"><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            for(var i=0;i<leng;i++){
                if(i == 0){
                    html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+detail[i].thumbpic+'" class="img-rounded"></a></td>';
                    html+='<td>'+detail[i].title+'</td>';
                    html+='<td>'+detail[i].num+'</td>';
                    html+='<td>'+detail[i].price+'</td>';
                    html+='<td rowspan="'+info.count+'">'+info.order_no+'</td>';
                    html+='<td rowspan="'+info.count+'">'+info.totalfee+'</td>';
                    html+='<td rowspan="'+info.count+'">'+method+'</td>';
                    html+='<td rowspan="'+info.count+'">'+format(info.date)+'</td>';
                    html+='<td rowspan="'+info.count+'">'+status+'</td>';
                    html+='<td rowspan="'+info.count+'"><a href="detail/id/'+info.id+'" data-toggle="class" title="查看详情"><i class="fa fa-eyes text-primary text"></i></a>　<a href="javascript:;" onclick="return ajaxDel('+info.id+',this);" data-toggle="class" title="删除"><i class="fa fa-times text-danger text"></i></a></td>';
                    html+='</tr>';
                }else{
                    html+='<tr>';
                    html+='<td><a href="#" class="pull-left thumb-sm"><img src="'+detail[i].thumbpic+'" class="img-rounded"></a></td>';
                    html+='<td>'+detail[i].title+'</td>';
                    html+='<td>'+detail[i].num+'</td>';
                    html+='<td>'+detail[i].price+'</td>';
                    html+='</tr>';
                }
            }
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