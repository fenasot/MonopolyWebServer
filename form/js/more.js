$(function () {
    $('.sec2-cont .ul1 li').mouseenter(function () {
        var $this = $(this),
            index = $this.index();
        $this.addClass('on').siblings().removeClass('on');
    })

    //导航
    $(window).scroll(function () {
        var ST = $(window).scrollTop();
        if (ST > 0) {
            $('.fixtop').addClass('on');
        } else {
            $('.fixtop').removeClass('on')
        }
    })
    var ST = $(window).scrollTop();
    if (ST > 0) {
        $('.fixtop').addClass('on');
    }

})