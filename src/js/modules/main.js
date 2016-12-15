$(function () {
    var $doc = $(document);
    var $body = $('body');
    var $modalRotate = $('#rotate');
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
        loop: false,
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

        $body.animate({scrollTop:$needEl.position().top}, '500');
    });
    $('.scroll-view').on('click', function () {
        var $this = $(this);
        $body.addClass('modal-show');
        $modalRotate.addClass('showen');
        $modalRotate.find('.title-line').html($this.siblings('.product-title').clone()).append($this.siblings('.price-wrap').clone());
        var $needDir = $this.siblings('img').attr('src').replace(/.*?products\/(.*?)\..*/,'$1');
        $modalRotate.find('img').each(function (i,el) {
            var src = $(el).attr('src').replace(/(.*?products\/).*?(\/.*$)/,'$1'+$needDir+'$2');
            $(el).attr('src',src);
        });

    });
    $('.modal .cross').on('click', function () {
        $modalRotate.removeClass('showen');
        $body.removeClass('modal-show');
    });
    $body.on('click', '.buy-btn', function () {
        console.log('buy');

    });
});
