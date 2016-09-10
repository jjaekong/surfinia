<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>마이페이지</h2>
            </div>
        </div>
        <article class="mypage">
            <div class="container">
                <div class="my-info">
                    <dl>
                        <dt>사용가능 적립금</dt>
                        <dd>
                            800점
                            <p class="inquiry-btn">
                                <a href="#" class="btn" role="button">조회</a>
                            </p>
                        </dd>
                        <dt>총적립금</dt>
                        <dd>
                            0점
                            <p class="inquiry-btn">
                                <a href="#" class="btn" role="button">조회</a>
                            </p>
                        </dd>
                        <dt>사용적립금</dt>
                        <dd>
                            82,700점
                        </dd>
                        <dt>쿠폰</dt>
                        <dd>
                            2,000점
                            <p class="inquiry-btn">
                                <a href="#" class="btn" role="button">조회</a>
                            </p>
                        </dd>
                        <dt>총주문</dt>
                        <dd>
                            0개
                        </dd>
                    </dl>
                </div>
                <ul class="row">
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>ORDER</h3>
                            <p>주문내역조회</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>PROFILE</h3>
                            <p>회원정보</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>WISHLIST</h3>
                            <p>관심상품</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>CART</h3>
                            <p>장바구니</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>COUPON</h3>
                            <p>쿠폰</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>POINT</h3>
                            <p>적립금</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>Q&amp;A</h3>
                            <p>묻고답하기</p>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <a href="#">
                            <h3>BOARD</h3>
                            <p>게시판관리</p>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
