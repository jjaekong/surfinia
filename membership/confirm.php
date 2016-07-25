<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">

</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership confirm">
        <div class="container">
            <section class="confirm-list">
                <div class="section-header">
                    <h1>주문상세조회</h1>
                </div>
                <div class="order-info">
                    <h2>주문정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>주문번호</th>
                                    <td>20160707-83749329</td>
                                </tr>
                                <tr>
                                    <th>주문일자</th>
                                    <td>2016-07-07 04:49</td>
                                </tr>
                                <tr>
                                    <th>주문자</th>
                                    <td>홍길동</td>
                                </tr>
                                <tr>
                                    <th>주문처리상태</th>
                                    <td>결제완료</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="payment-info">
                    <h2>결제정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>총 주문금액</th>
                                    <td>59,000원</td>
                                </tr>
                                <tr>
                                    <th>총 결제금액</th>
                                    <td>59,000원</td>
                                </tr>
                                <tr>
                                    <th>결제수단</th>
                                    <td>카드결제</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="product-info">
                    <h2>주문 상품 정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 100px;">
                                <col style=" width: 550px;">
                                <col style=" width: 70px;">
                                <col style=" width: 120px;">
                                <col style=" width: 100px;">
                                <col style=" width: 110px;">
                                <col style=" width: 120px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>이미지</th>
                                    <th>상품정보</th>
                                    <th>수량</th>
                                    <th>상품구매금액</th>
                                    <th>배송구분</th>
                                    <th>주문처리상태</th>
                                    <th>취소/교환/반품</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <img src="/assets/images/membership/product_img01.jpg" alt="구매상품이미지">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">샘플아이템</a><br>
                                        <dl class="inline-dl">
                                            <dt>옵션</dt>
                                            <dd>00</dd>
                                        </dl>
                                    </td>
                                    <td><b>1</b></td>
                                    <td><b>27,000원</b></td>
                                    <td><b>기본배송</b></td>
                                    <td><b>결제완료</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="7">상품구매금액 59,000 + 배송비 0 = <strong>59,000</strong>원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="delivery-info">
                    <h2>배송지정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>받으시는분</th>
                                    <td>홍길동</td>
                                </tr>
                                <tr>
                                    <th>우편번호</th>
                                    <td>12345</td>
                                </tr>
                                <tr>
                                    <th>주소</th>
                                    <td>서울시 서초구 양재동</td>
                                </tr>
                                <tr>
                                    <th>일반전화</th>
                                    <td>02-000-0000</td>
                                </tr>
                                <tr>
                                    <th>휴대전화</th>
                                    <td>010-0000-0000 </td>
                                </tr>
                                <tr>
                                    <th>배송메세지</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
