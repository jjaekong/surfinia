<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SURFINIA</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/mobile/css/default.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header id="header">
            <button type="button" class="btn btn-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="sr-only">메뉴버튼</span>
            </button>
            <h1><img src="/mobile/images/logo.jpg" alt="서피니아 쇼핑몰"></h1>
            <button type="button" class="btn btn-cart"><span class="cart"></span></button>
        </header>
        <nav id="primary-menu">
            <ul>
                <li><a href="#">NEW</a></li>
                <li><a href="#">BLANKET</a></li>
                <li><a href="#">CUSHION</a></li>
                <li><a href="#">LIVING</a></li>
                <li><a href="#">ACCESSORY</a></li>
                <li><a href="#">sale</a></li>
            </ul>
        </nav>
        <main id="content">
            <div id="visual">
                <ul>
                    <li><img src="/mobile/images/main_visual01.jpg" class="img-responsive" alt="메인 이미지"></li>
                    <li><img src="/mobile/images/main_visual02.jpg" class="img-responsive" alt="메인 이미지"></li>
                    <li><img src="/mobile/images/main_visual03.jpg" class="img-responsive" alt="메인 이미지"></li>
                </ul>
            </div>
        </main>
        <footer id="footer">
            FOOTER
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.bxslider.min.js"></script>
        <script>
            $('#visual ul').bxSlider({
                auto: true,
                controls: false
            });
        </script>

    </body>
</html>
