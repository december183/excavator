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
            }else if(res.status == 401){
                $('#code').focus();
            }else if(res.status == 404 || res.status == 402){
                $('#username').focus();
            }else if(res.status == 403){
                $('#password').focus();
            }
        }
    };
    $('#ajaxForm').ajaxForm(options);
});
