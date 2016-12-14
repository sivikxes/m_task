$(function () {
    var $doc = $(document);
    var $header = $('header');
    $doc.on('scroll', function (e) {
        if($doc.scrollTop() > 0){
            $header.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
        }
    });
    $doc.on('click', function (e) {
        if($(e.target).closest('.nav').length == 0)
        $nav.removeClass('opened');
    });
    var $nav = $('.nav');
    $nav.on('click', function () {
        $nav.toggleClass('opened');
    });

    var $tabsLink = $(".tabs a");

    var mySwiper = new Swiper('.swiper-container',{
        mode:'horizontal',
        loop: true,
        calculateHeight:true,
        onSlideChangeEnd: function (e) {
            $tabsLink.removeClass('active');
            $($tabsLink.get(e.activeLoopIndex)).addClass('active');
        }
    });

    $tabsLink.on('touchstart mousedown',function(e){
        e.preventDefault();
        mySwiper.swipeTo( $(this).index() );
    }).click(function(e){
        e.preventDefault()
    });

    $('.section-btn').on('click', function (e) {
        e.preventDefault();
        var $needEl = $($(this).attr('data-href'));

        $('body').animate({scrollTop:$needEl.position().top}, '500');
    });

});
