$('#quick .recent ul').bxSlider({
    mode: 'vertical',
    maxSlides: 2,
    minSlides: 2,
    pager: false,
    slideMargin: 10,
    nextText: '<img src="/assets/images/caret_down.gif" alt="다음">',
    prevText: '<img src="/assets/images/caret_up.gif" alt="이전">'
});

$(window).on('scroll', function() {
    var scrollTop = (typeof quickTop === "undefined") ? 712 : quickTop;
    if ($(this).scrollTop() >= scrollTop) {
        $('#quick').stop().animate({
            top: $(this).scrollTop() + 30
        }, 'slow');
    } else {
        $('#quick').stop().animate({
            top: scrollTop
        }, 'slow');
    }
});
