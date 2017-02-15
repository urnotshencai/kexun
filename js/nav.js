$(function () {
<<<<<<< HEAD
        $(".nav_nav li").each(function () {
            $(".nav_nav li").mouseover(function () {
                $(this).addClass("select");
                $(this).children("dl").show();
            });
            $(".nav_nav li").mouseout(function () {
                $(this).removeClass("select");
                $(this).children("dl").hide();
            })
        });
        $(".user").mouseover(function () {
            $(this).css("backgroundColor","white");
            $(".userBar>a").css("color","black");
            $(".drap").show();
        });
        $(".user").mouseout(function () {
            $(this).css("backgroundColor","");
            $(".userBar>a").css("color","");
            $(".drap").hide();
        });
        $(".nav_nav li dl dd").mouseover(function () {
            $(this).addClass("change");
            $(this).children("a").css("color","white")
        });
        $(".nav_nav li dl dd").mouseout(function () {
            $(this).removeClass("change");
            $(this).children("a").css("color","")
        })
    })
=======
    $(".nav_nav li").each(function () {
        $(".nav_nav li").mouseover(function () {
            $(this).addClass("select");
            $(this).children("dl").show();
        });
        $(".nav_nav li").mouseout(function () {
            $(this).removeClass("select");
            $(this).children("dl").hide();
        })
    });
    $(".user").mouseover(function () {
        $(this).css("backgroundColor", "white");
        $(".userBar >a").css("color", "black");
        $(".drap").show();
    });
    $(".user").mouseout(function () {
        $(this).css("backgroundColor", "");
        $(".userBar >a").css("color", "");
        $(".drap").hide();
    });
    $(".nav_nav li dl dd").mouseover(function () {
        $(this).addClass("change");
        $(this).children("a").css("color", "white")
    });
    $(".nav_nav li dl dd").mouseout(function () {
        $(this).removeClass("change");
        $(this).children("a").css("color", "")
    })
})
>>>>>>> 34384fd3ffdf4a3811b471089b59878db5b65e7b
