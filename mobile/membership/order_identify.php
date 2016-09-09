<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
<link href="/mobile/css/jquery-ui.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>주문상세조회</h2>
            </div>
        </div>
        <section class="order-identify">
            <div class="container">
                <h3>주문정보</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px">
                            <col style="width: 210px">
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
                <h3>결제정보</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px">
                            <col style="width: 210px">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>총 주문금액</th>
                                <td>59,000 원</td>
                            </tr>
                            <tr>
                                <th>총 결제금액</th>
                                <td class="total">59,000 원</td>
                            </tr>
                            <tr>
                                <th>결제수단</th>
                                <td>홍길동</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>주문상품 정보</h3>
                <div class="product-infomation">
                    <div class="order-content">
                        <p class="item-img">
                            <a href="#">
                                <img src="/mobile/images/membership/mylist_product_img.jpg" alt="구매항 상품 이미지">
                            </a>
                        </p>
                        <div class="details">
                            <h5>샘플아이템</h5>
                            <dl>
                                <dt>옵션</dt>
                                <dd>00</dd>
                            </dl>
                            <p class="amount">27,000 원 / 주문수량 : 1</p>
                        </div>
                    </div>
                    <p class="success">결제완료</p>
                </div>
                <dl class="total-amount">
                    <dt>상품구매구맥 59,000원 + 배송비 0원</dt>
                    <dd>59,000원</dd>
                </dl>
                <h3>배송지정보</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px">
                            <col style="width: 210px">
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
                                <td>010-0000-0000</td>
                            </tr>
                            <tr>
                                <th>배송메세지</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-lg btn-default" role="button">뒤로가기</a>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
