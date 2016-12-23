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
            alert('请输入提现人姓名或提现申请起止时间进行查询');
            return;
        }
        $.ajax({
            url:'Admin/Withdraw/ajaxSearch',
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
        url:'Admin/Withdraw/ajaxSearch',
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
            if(info.status == 1){
                var status='<a href="#" onclick="setStatus('+info.id+',this)"><span class="text-primary text">已处理</span></a>';
            }else{
                var status='<a href="#" onclick="setStatus('+info.id+',this)"><span class="text-danger text">待处理</span></a>';
            }
            if(info.type == 1){
                var accounttype='微信';
            }else{
                var accounttype='支付宝';
            }
            html+='<tr>';
            html+='<td><input type="checkbox" name="ids[]" value="'+info.id+'"></td>';
            html+='<td>'+info.realname+'</td>';
            html+='<td>'+info.phone+'</td>';
            html+='<td>'+info.money+'</td>';
            html+='<td>'+accounttype+'</td>';
            html+='<td>'+info.account+'</td>';
            html+='<td>'+format(info.date)+'</td>';
            html+='<td>'+status+'</td>';
            html+='</tr>';
        }
        $('#table-info>tbody').html(html);
        $('#page >ul').html(page);
    }else{
        alert(jsonObj.message);
    }
}
function setStatus(id,obj){
    var obj=$(obj);
    $.ajax({
        url:'Admin/Withdraw/setStatus',
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
