<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership conclude">
        <div class="container">
            <section class="bascat-info">
                <div class="section-header">
                    <h1>주문완료</h1>
                </div>
                <div class="benefit">
                    <h5>혜택정보</h5>
                    <ul>
                        <li><strong>테스트</strong> 님은 [일반회원] 회원이십니다</li>
                        <li>
                            <dl class="inline-dl">
                                <dt>가용적립금</dt>
                                <dd><strong>3,000원</strong></dd>
                                <dt>쿠폰</dt>
                                <dd><strong>0개</strong></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="success">
                    <h2>
                        고객님의 주문의 완료 되었습니다<br>
                        <small>주문내역 및 배송에 관한 안내는 주문조회 를 통하여 확인 가능합니다.</small>
                    </h2>
                    <div class="order-number">
                        <dl class="inline-dl">
                            <dt>주문번호</dt>
                            <dd>20160801-0000089</dd>
                            <dt>주문일자</dt>
                            <dd>2016-08-01 <span class="time">15:27:45</span></dd>
                        </dl>
                    </div>
                </div>
                <div class="payment-info">
                    <h3>결제정보</h3>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style="width: 170px;">
                                <col style="width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>최종결제금액</th>
                                    <td>227,000원</td>
                                </tr>
                                <tr>
                                    <th>결제수단</th>
                                    <td>
                                        <h4>무통장 입금</h4>
                                        <dl class="inline-dl">
                                            <dt>입금자</dt>
                                            <dd>홍길동</dd>
                                            <dt>계좌번호</dt>
                                            <dd>KEB하나은행 234-910009-42904 ((주)가림아이앤씨)</dd>
                                        </dl>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white">인터넷뱅킹 바로가기</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="product-info">
                    <h3>주문 상품 정보</h3>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 100px;">
                                <col style=" width: 552px;">
                                <col style=" width: 70px;">
                                <col style=" width: 118px;">
                                <col style=" width: 100px;">
                                <col style=" width: 110px;">
                                <col style=" width: 120px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>이미지</th>
                                    <th>상품정보</th>
                                    <th>수량</th>
                                    <th>판매가</th>
                                    <th>적립금</th>
                                    <th>배송구분</th>
                                    <th>합계</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
                                    <td>1</td>
                                    <td>27,000</td>
                                    <td>1,100원</td>
                                    <td>결제완료</td>
                                    <td>227,000원</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <span>기본배송</span>
                            상품구매금액 227,000 + 배송비 0 + 지역별배송비 0  =  합계 : <strong>227,000원</strong>
                        </p>
                    </div>
                </div>
                <div class="amount">
                    <h3>결제금액</h3>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style="width: 170px;">
                                <col style="width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>총 주문금액</th>
                                    <td>59,000원</td>
                                </tr>
                                <tr>
                                    <th>총 결제금액</th>
                                    <td><strong>59,000원</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="saved-money">
                    <h3>적립예정 내역</h3>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style="width: 170px;">
                                <col style="width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>총 적립예정금액</th>
                                    <td><strong>1,100원</strong></td>
                                </tr>
                                <tr>
                                    <th>상품별 적립금</th>
                                    <td>1,100원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="address-info">
                    <h3>배송지정보</h3>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style="width: 170px;">
                                <col style="width: 1000px;">
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
                                    <td>010-000-0000</td>
                                </tr>
                                <tr>
                                    <th>배송메세지</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-green" role="button">쇼핑계속하기</a>
                                <a href="#" class="btn btn-white" role="button">주문확인하기</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="guide">
                    <h3>이용안내</h3>
                    <div>
                        비회원 주문의 경우, 주문번호를 꼭 기억하세요. 주문번호로 주문조회가 가능합니다.<br>
                        배송은 결제완료 후 지역에 따라 2일 ~ 3일 가량이 소요됩니다.  상품별 자세한 배송과정은 주문조회를 통하여 조회하실 수 있습니다.<br>
                        주문의 취소 및 환불, 교환에 관한 사항은 이용안내의 내용을 참고하십시오.
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
