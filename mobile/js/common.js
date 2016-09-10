(function($) {
    $('#visual ul').bxSlider({
        auto: false,
        controls: false
    });

    $('.sponcer ul').bxSlider({
        auto: false,
        controls: false
    });
    $('.review ul').bxSlider({
        auto: false,
        controls: false
    });
})(jQuery);

(function($) {
    $(document).on('click', '#nav .gnb > li > a', function(e) {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
        e.preventDefault();
    });

    $(document).on('click', '#nav .nav-backdrop, #nav .btn-nav-close', function() {
        $('body').removeClass('nav-opened');
        $('#nav').addClass('collapsed');
    });

    $(document).on('click', '#header .btn-menu', function() {
        $('body').addClass('nav-opened');
        $('#nav').removeClass('collapsed');
    });

})(jQuery);

(function($) {
    $("#datepicker, #datepicker-2").datepicker({
        showOn: "both",
        buttonImage: "/mobile/images/membership/calendar_btn.gif",
        buttonImageOnly: true,
        dateFormat: 'yy-mm-dd',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년'
    });
})(jQuery);
