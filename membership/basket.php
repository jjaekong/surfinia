<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership bascat">
        <div class="container">
            <section class="bascat-info">
                <div class="section-header">
                    <h1>관심상품</h1>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 42px;">
                            <col style=" width: 100px;">
                            <col style=" width: 454px;">
                            <col style=" width: 94px;">
                            <col style=" width: 78px;">
                            <col style=" width: 82px;">
                            <col style=" width: 88px;">
                            <col style=" width: 108px;">
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
                                <th>수량</th>
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
                                    샘플아이템<br>
                                    <dl class="inline-dl">
                                        <dt>옵션</dt>
                                        <dd>00</dd>
                                    </dl>
                                </td>
                                <td>25,000원</td>
                                <td>
                                    <p class="count">
                                       1
                                        <button class="top">&and;</button>
                                        <button class="down">&or;</button>
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white">변경</a>
                                        </p>
                                    </div>
                                </td>
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
                    <p>상품구매금액 59,000 + 배송비 0 = <strong>59,000원</strong></p>
                </div>
                <div class="btn-area">
                    <p class="first-btn">
                        선택상품을
                        <a href="#" class="btn btn-white" role="button">삭제</a>
                    </p>
                    <p class="last-btn">
                        <a href="#" class="btn btn-green" role="button">전체상품주문</a>
                        <a href="#" class="btn btn-white" role="button">선택상품주문</a>
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
