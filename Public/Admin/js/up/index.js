$(function(){
    var options={
        url:'',
        data: $('#ajaxForm').serialize(),
        type:'post',
        dataType:'json',
        success:function (res) {
            alert(res.message);
            if (res.status == 200) {
                var index=parent.layer.getFrameIndex(window.name);
                parent.$('#markpath').val(res.data.path);
                parent.$('#markpic').html('<img class="img-responsive thumb m-r-xs" src="'+res.data.path+'" alt="水印图" />');
                parent.layer.close(index);
            }
        }
    };
    $('#ajaxForm').ajaxForm(options);
});