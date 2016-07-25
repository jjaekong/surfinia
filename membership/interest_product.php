<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership interest-product">
        <div class="container">
            <section class="interest">
                <div class="section-header">
                    <h1>관심상품</h1>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 42px;">
                            <col style=" width: 100px;">
                            <col style=" width: 508px;">
                            <col style=" width: 110px;">
                            <col style=" width: 86px;">
                            <col style=" width: 90px;">
                            <col style=" width: 110px;">
                            <col style=" width: 124px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="check" id="check">
                                    <label for="check" class="sr-only"></label>
                                </th>
                                <th>이미지</th>
                                <th>상품정보</th>
                                <th>판매가</th>
                                <th>적립금</th>
                                <th>배송비</th>
                                <th>합계</th>
                                <th>선택</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="check" id="check-2">
                                    <label for="check-2" class="sr-only"></label>
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="/assets/images/membership/order_img01.jpg" alt="구매상품이미지">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">샘플아이템</a><br>
                                    <dl class="inline-dl">
                                        <dt>옵션</dt>
                                        <dd>00</dd>
                                    </dl>
                                </td>
                                <td>25,000원</td>
                                <td>250원</td>
                                <td>2,500원</td>
                                <td>27,500원</td>
                                <td>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white" role="button">주문하기</a>
                                            <a href="#" class="btn btn-white" role="button">장바구니담기</a>
                                            <a href="#" class="btn btn-white" role="button">삭제</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p class="first-btn">
                        선택상품을
                        <a href="#" class="btn btn-white" role="button">삭제</a>
                        <a href="#" class="btn btn-white" role="button">장바구니담기</a>
                    </p>
                    <p class="last-btn">
                        <a href="#" class="btn btn-green" role="button">전체상품주문</a>
                        <a href="#" class="btn btn-white" role="button">관심상품 비우기</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
