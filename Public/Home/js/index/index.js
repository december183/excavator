$(document).ready(function(){
    $(".main_visual").hover(function(){
        $("#btn_prev,#btn_next").fadeIn()
    },function(){
        $("#btn_prev,#btn_next").fadeOut()
    });

    $dragBln = false;
    $(".main_image").touchSlider({
        flexible : true,
        speed : 200,
        btn_prev : $("#btn_prev"),
        btn_next : $("#btn_next"),
        paging : $(".flicking_con a"),
        counter : function (e){
            $(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
        }
    });

    $(".main_image").bind("mousedown", function() {
        $dragBln = false;
    });

    $(".main_image").bind("dragstart", function() {
        $dragBln = true;
    });

    $(".main_image a").click(function(){
        if($dragBln) {
            return false;
        }
    });

    timer = setInterval(function(){
        $("#btn_next").click();
    }, 4000);

    $(".main_visual").hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(function(){
            $("#btn_next").click();
        },4000);
    });

    $(".main_image").bind("touchstart",function(){
        clearInterval(timer);
    }).bind("touchend", function(){
        timer = setInterval(function(){
            $("#btn_next").click();
        }, 4000);
    });
    $(".search").focus(function(){
        window.location.href="search";
    })
    function fresh()
    {
        var endtime= new Date("2016/10/8,17:50:45");
        var nowtime = new Date();
        var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000);
        h=parseInt(leftsecond/3600);
        m=parseInt((leftsecond/60)%60);
        s=parseInt(leftsecond%60);
        if(h<10) h= "0"+h;
        if(m<10 && m>=0) m= "0"+m; else if(m<0) m="00";
        if(s<10 && s>=0) s= "0"+s; else if(s<0) s="00";
        document.getElementById("hour").innerHTML=h;
        document.getElementById("munite").innerHTML=m;
        document.getElementById("second").innerHTML=s;
        //判断秒杀是否结束，结束则输出相应提示信息
        if(leftsecond<=0){
            window.clearTimeout();
            document.getElementById("bot-box").style.display="block";
            document.getElementsByClassName("dt")[0].style.display="none";
            document.getElementById("bot-box").innerHTML="秒杀已结束";
            clearInterval(sh);
        }
    }
    var sh=setInterval(fresh,1000);
});

