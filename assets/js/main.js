(function($) {

    // 비주얼 영역
    var visualSlider = $('#visual ul').bxSlider({
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

    $(document).on('click', '#visual ul li a', function(e) {
        if ($(this).parent().siblings('.active').index() > -1) {
            e.preventDefault();
            visualSlider.stopAuto();
            // 이전 슬라이드
            if ($(this).parent().index() < $(this).parent().siblings('.active').index()) {
                visualSlider.goToPrevSlide();
            }
            // 다음 슬라이드
            if ($(this).parent().index() > $(this).parent().siblings('.active').index()) {
                visualSlider.goToNextSlide();
            }
            visualSlider.startAuto();
        }
    });

    // 스폰서쉽 영역
    $('#sponsorship ul').bxSlider({
        controls: false
    });

})(jQuery);
