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
});