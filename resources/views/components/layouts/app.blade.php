<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Digital Bulletin | Homepage</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <head>

    <body id="Homepage">
        
        {{ $slot }}
    
      </body>

      <!-- Scripts -->
            <script src="assets/js/adminlte.js"></script>
            <script src="assets/js/login.js"></script>
           <script src="assets/js/register.js"></script>

            <!-- Interac Scripts -->
            <script src="assets/js/interact.js"></script>

            <script src="assets/js/jquery-2.1.3.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/jquery.appear.js"></script>
            <script src="assets/js/mainscript.js"></script>
            <script src="assets/js/main.js"></script>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/isotope.min.js"></script>
            <script src="assets/js/owl-carousel.js"></script>
            <script src="assets/js/lightbox.js"></script>
            <script src="assets/js/tabs.js"></script>
            <script src="assets/js/video.js"></script>
            <script src="assets/js/slick-slider.js"></script>
            <script src="assets/js/custom.js"></script>
            <script>
                //according to loftblog tut
                $('.nav li:first').addClass('active');

                var showSection = function showSection(section, isAnimate) {
                var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

                if (isAnimate) {
                    $('body, html').animate({
                    scrollTop: reqSectionPos },
                    800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }

                };

                var checkSection = function checkSection() {
                $('.section').each(function () {
                    var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                    }
                });
                };

                $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
                e.preventDefault();
                showSection($(this).attr('href'), true);
                });

                $(window).scroll(function () {
                checkSection();
                });
            </script>
</html>
