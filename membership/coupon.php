<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership coupon">
        <div class="container">
            <section class="my-coupon">
                <div class="section-header">
                    <h1>마이쿠폰</h1>
                </div>
                <h2>쿠폰인증번호 등록하기</h2>
                <div class="register">
                    <input type="text" id="coupon-number">
                    <label for="coupon-number" class="sr_only"></label>
                    <p>
                        <a href="#" class="btn" role="button">쿠폰번호 인증</a>
                    </p>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 56px;">
                            <col style=" width: 310px;">
                            <col style=" width: 100px;">
                            <col style=" width: 100px;">
                            <col style=" width: 200px;">
                            <col style=" width: 110px;">
                            <col style=" width: 110px;">
                            <col style=" width: 184px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>쿠폰명</th>
                                <th>쿠폰적용 상품</th>
                                <th>구매금액</th>
                                <th>결제수단</th>
                                <th>할인액(률)</th>
                                <th>적립액(률)</th>
                                <th>사용가능기간</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>이벤트</td>
                                <td>모든상품</td>
                                <td>20,000원</td>
                                <td>신용카드</td>
                                <td>2,000원</td>
                                <td>200점</td>
                                <td>2016-07-25</td>
                            </tr>
                            <tr>
                                <td colspan="8">등록된 쿠폰이 없습니다.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#">&laquo;</a>
                        </li>
                        <li>
                            <a href="#">&lsaquo;</a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#">&rsaquo;</a>
                        </li>
                        <li>
                            <a href="#">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
