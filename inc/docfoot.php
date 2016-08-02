<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.bxslider.min.js"></script>
<script>
    (function($) {

        $('#quick .recent ul').bxSlider({
            mode: 'vertical',
            maxSlides: 2,
            minSlides: 2,
            pager: false,
            slideMargin: 10,
            nextText: '<span class="glyphicon glyphicon-triangle-bottom"></span>',
            prevText: '<span class="glyphicon glyphicon-triangle-top"></span>'
        });

        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 712) {
                $('#quick').stop().animate({
                    top: $(this).scrollTop() + 30
                }, 'slow');
            } else {
                $('#quick').stop().animate({
                    top: 712
                }, 'slow');
            }
        });

    })(jQuery);
</script>
