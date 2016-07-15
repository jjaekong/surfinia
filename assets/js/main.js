(function($) {

    // 비주얼 영역
    $('#visual ul').bxSlider({
        auto: true,
        controls: false,
        autoControl: true,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 1170,
        responsive: false,
        touchEnabled: false,
        onSliderLoad: function(currentIndex) {
            $('#visual .bx-viewport').css({
                'margin': '0 auto',
                'width' : 1170,
                'overflow': 'visible'
            });
            $('#visual .bx-viewport ul').css({
                'width' : $('#visual ul li').length * 100 + '%'
            });
            $('#visual .bx-viewport ul li').not('.bx-clone').eq(currentIndex).addClass('active');
        },
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
            $('#visual .bx-viewport ul li.active').removeClass('active');
            $slideElement.addClass('active');
        }
    });

    // 스폰서쉽 영역
    $('#sponsorship ul').bxSlider({
        controls: false
    });

})(jQuery);
