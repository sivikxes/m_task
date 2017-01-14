$(function () {
    var $doc = $(document);
    var $body = $('body');
    var $modalRotate = $('#rotate');
    var $modalBuy = $('#buy');
    var $header = $('header');
    var $videoFrame = $('.video-frame');
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
        loop: false,
        calculateHeight:true,
        onSlideChangeEnd: function (e) {
            $tabsLink.removeClass('active');
            $($tabsLink.get(e.activeLoopIndex)).addClass('active');
        }
    });

    $('.swiper-button-next').on('touchstart mousedown',function(e){
        e.preventDefault();
        mySwiper.swipeTo( mySwiper.activeIndex == mySwiper.slides.length-1? 0 :mySwiper.activeIndex+1 );
    }).click(function(e){
        e.preventDefault()
    });
    $('.swiper-button-prev').on('touchstart mousedown',function(e){
        e.preventDefault();
        mySwiper.swipeTo( mySwiper.activeIndex == 0?mySwiper.slides.length-1:mySwiper.activeIndex-1 );
    }).click(function(e){
        e.preventDefault()
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

        $body.animate({scrollTop:$needEl.position().top}, '500');
    });

    $('.js-video-btn').on('click',function () {
        var $this = $(this);
        var curvid = parseInt($videoFrame.attr('data-vid'));
       if($this.hasClass('next-btn')){
           if(curvid==2){
               curvid = 0;
           } else {
               curvid++;
           }
       } else {
           if(curvid==0){
               curvid = 2;
           } else {
               curvid--;
           }
       }
        $videoFrame.attr('data-vid',curvid);
    });

    $('.scroll-view').on('click', function () {
        var $this = $(this);
        $body.addClass('modal-show');
        $modalRotate.addClass('showen');
        $modalRotate.find('.title-line').html($this.siblings('.product-title').clone()).append($this.siblings('.price-wrap').clone());
        var $needDir = $this.siblings('img').attr('src').replace(/.*?products\/(.*?)\..*/,'$1');
        var $imagesNeed = [];
        for(var i = 1; i < 37; i++){
            $imagesNeed.push('public/images/products/'+$needDir+'/'+i+'.jpg');
        }

        $("#carousel img").threesixty({images:$imagesNeed, method:'click', direction:'forward', sensibility: 1});


    });
    $('.modal .cross').on('click', function () {
        $modalRotate.removeClass('showen');
        $modalBuy.removeClass('showen');
        $body.removeClass('modal-show');
    });
    $('.modal').on('click', function (e) {
        if($(e.target).closest('.modal-content').length == 0){
            $modalRotate.removeClass('showen');
            $modalBuy.removeClass('showen');
            $body.removeClass('modal-show');
        }
    });
    $body.on('click', '.buy-btn', function (e) {
        e.preventDefault();
        $modalRotate.removeClass('showen');
        $body.addClass('modal-show');
        $modalBuy.addClass('showen');
    });
    new WOW().init();
});
