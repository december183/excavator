$(function(){
    var wait=60;
    function time(obj){
        if(wait == 0){
            obj.removeAttribute("disabled");
            obj.value="免费获取验证码";
            wait = 60;
        }else{
            obj.setAttribute("disabled", true);
            obj.value="重新发送(" + wait + ")";
            wait--;
            setTimeout(function(){
                    time(obj)},
                1000);
        }
    }
    $('#identifying_code').click(function(){
        time(this);
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
