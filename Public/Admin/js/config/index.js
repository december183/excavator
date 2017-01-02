$(function(){
    var options={
        url:'',
        type:'post',
        dataType:'json',
        beforeSubmit:  showRequest,
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