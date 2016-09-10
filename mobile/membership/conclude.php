<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>주문완료</h2>
            </div>
        </div>
        <article class="pament-success">
            <div class="container">
                <div class="benefit">
                    <h4>혜택정보</h4>
                    <div class="details">
                        <p>테스트님은 [일반회원]이십니다.</p>
                        <dl>
                            <dt>가용적립금</dt>
                            <dd>3,000원</dd>
                            <dt>쿠폰</dt>
                            <dd>0개</dd>
                        </dl>
                    </div>
                </div>
                <div class="success">
                    <strong>고객님의 주문이 완료 되었습니다</strong>
                    <p>주문내역 및 배송에 관한 안내는 주문조회 를 통하여 확인 가능합니다.</p>
                </div>
                <div class="order-number">
                    <dl>
                        <dt>주문번호</dt>
                        <dd>20160801-0000089</dd>
                        <dt>주문일자</dt>
                        <dd>2016-08-01 15:27:45</dd>
                    </dl>
                </div>
            </div>
        </article>
        <article class="pay-info">
            <div class="container">
                <h3>결제정보</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px;">
                            <col style="width: 210px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>최종결제금액</th>
                                <td class="total">227,000원</td>
                            </tr>
                            <tr>
                                <th>결제수단</th>
                                <td class="payment-info">
                                    <h4>무통장입금</h4>
                                    <dl>
                                        <dt>입금자</dt>
                                        <dd>1</dd>
                                        <dt>계좌번호</dt>
                                        <dd>KEB하나은행</dd>
                                    </dl>
                                    <p class="bank-txt">234-910009-42904((주)가림아이앤씨)</p>
                                    <div class="btn-area bank-btn">
                                        <p>
                                            <a href="#" class="btn btn-default" role="button">인터넷 뱅킹 바로가기</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
        <article class="order-product-info">
            <div class="container">
                <h3>주문상품 정보</h3>
                <div class="infomation">
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
                            <p class="amount">기본배송<br> 27,000 원 / 주문수량 : 1</p>
                        </div>
                    </div>
                    <p class="success">결제완료</p>
                </div>
                <dl class="total-amount">
                    <dt>상품구매금액 5,9000원 + 배송비 0</dt>
                    <dd>59000원</dd>
                </dl>
                <h3>결제금액</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px;">
                            <col style="width: 210px;">
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
                        </tbody>
                    </table>
                </div>
                <h3>적립예정 내역</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px;">
                            <col style="width: 210px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th class="subject">총 적립<br>예정금액</th>
                                <td>1,000원</td>
                            </tr>
                            <tr>
                                <th>상품별 적립금</th>
                                <td>1,000원</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>배송지정보</h3>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 90px;">
                            <col style="width: 210px;">
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
                        <a href="#" class="btn btn-green btn-sm" role="button">쇼핑계속하기</a>
                        <a href="#" class="btn btn-default btn-sm" role="button">주문확인하기</a>
                    </p>
                </div>
                <h3>이용안내</h3>
                <div class="guide-info">
                    비회원 주문의 경우, 주문번호를 꼭 기억하세요.<br>
                    주문번호로 주문조회가 가능합니다.<br>
                    배송은 결제완료 후 지역에 따라 2일 ~ 3일 가량이 소요됩니다. 상품별 자세한 배송과정은 주문조회를 통하여 조회하실 수 있습니다.<br>
                    주문의 취소 및 환불, 교환에 관한 사항은 이용안내의 내용을 참고하십시오.
                </div>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
