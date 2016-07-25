<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership mypage">
        <div class="container">
            <section class="my-menu">
                <div class="section-header">
                    <h1>마이페이지</h1>
                </div>
                <div class="my-content">
                    <ul>
                        <li>
                            <dl class="inline-dl">
                                <dt>사용가능 적립금</dt>
                                <dd>
                                    800점
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white">조회</a>
                                        </p>
                                    </div>
                                </dd>
                                <dt>사용 적립금</dt>
                                <dd>0점</dd>
                                <dt>총주문</dt>
                                <dd>82,700원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>총 적립금</dt>
                                <dd>
                                    2,000점
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white">조회</a>
                                        </p>
                                    </div>
                                </dd>
                                <dt>쿠폰</dt>
                                <dd>
                                    0개
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white">조회</a>
                                        </p>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <ul class="my-list">
                    <li>
                        <a href="/membership/mylist.php">
                            <h2>ORDER</h2>
                            <p>주문내역조회</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h2>PROFILE</h2>
                            <p>회원정보</p>
                        </a>
                    </li>
                    <li>
                        <a href="/membership/interest_product.php">
                            <h2>WISHLIST</h2>
                            <p>관심상품</p>
                        </a>
                    </li>
                    <li>
                        <a href="/membership/basket.php">
                            <h2>CART</h2>
                            <p>장바구니</p>
                        </a>
                    </li>
                    <li>
                        <a href="/membership/coupon.php">
                            <h2>COUPON</h2>
                            <p>쿠폰</p>
                        </a>
                    </li>
                    <li>
                        <a href="/membership/saved_money.php">
                            <h2>POINT</h2>
                            <p>적립금</p>
                        </a>
                    </li>
                    <li>
                        <a href="/community/qna.php">
                            <h2>Q&amp;A</h2>
                            <p>묻고답하기</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h2>BOARD</h2>
                            <p>게시물관리</p>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
