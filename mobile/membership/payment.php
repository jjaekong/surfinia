<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>주문결제</h2>
            </div>
        </div>
        <form>
            <article class="payment">
                <div class="container">
                    <div class="payment-info">
                        <div class="select-product">
                            <input type="checkbox" class="check">
                            <p class="items">
                                <img src="/mobile/images/membership/mylist_product_img.jpg" alt="선택 상품 이미지">
                            </p>
                            <div class="details">
                                <h3>샘플아이템 [옵션: 00]</h3>
                                <dl>
                                    <dt>판매가</dt>
                                    <dd>25,000원</dd>
                                    <dt>적립금</dt>
                                    <dd>250원</dd>
                                    <dt>배송비</dt>
                                    <dd>2,500원</dd>
                                    <dt class="total">합계</dt>
                                    <dd class="total">27,000 원</dd>
                                </dl>
                                <div class="btn-count">
                                    <p>
                                        <a href="#" class="btn btn-minus" role="button"></a>
                                        <span>1</span>
                                        <a href="#" class="btn btn-plus" role="button"></a>
                                        <a href="#" class="btn btn-default" role="button">변경</a>
                                    </p>
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-xs btn-default" role="button">주문하기</a>
                                    <a href="#" class="btn btn-xs btn-default" role="button">장바구니담기</a>
                                    <a href="#" class="btn btn-xs btn-default" role="button">삭제</a>
                                </p>
                            </div>
                        </div>
                        <dl class="total-amount">
                            <dt>상품구매금액 5,9000원 + 배송비 0</dt>
                            <dd>59000원</dd>
                        </dl>
                    </div>
                    <p class="attention">상품의 옵션 및 수량 변경은 상품상세 또는 장바구니에서 가능합니다</p>
                </div>
            </article>
            <article class="order-info">
                <div class="container">
                    <h3>주문자정보</h3>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th class="required"><label for="orderer">주문자</label></th>
                                    <td><input type="text" class="form-control" id="orderer"></td>
                                </tr>
                                <tr>
                                    <th><label for="user-name">이름</label></th>
                                    <td><input type="text" class="form-control" id="user-name"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="user-pw">비밀번호</label></th>
                                    <td><input type="password" class="form-control" id="user-pw"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="pw-confirm">비밀번호확인</label></th>
                                    <td><input type="password" class="form-control" id="pw-confirm"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="email">비밀번호확인</label></th>
                                    <td class="email">
                                        <input type="text" class="form-control" id="email">
                                        @
                                        <label for="email-2" class="sr-only">도메인</label>
                                        <input type="text" class="form-control" id="email-2">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="addr">주소</label></th>
                                    <td class="address">
                                        <input type="text" class="form-control" id="addr">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default" role="button">우편번호 검색</a>
                                            </p>
                                        </div>
                                        <label for="addr-1" class="sr-only">주소-2</label>
                                        <input type="text" class="form-control" id="addr-1">
                                        <label for="addr-2" class="sr-only">주소-3</label>
                                        <input type="text" class="form-control" id="addr-2">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="call">전화번호</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="call">
                                        -
                                        <label for="call-1" class="sr-only">전화번호-2</label>
                                        <input type="text" class="form-control" id="call-1">
                                        -
                                        <label for="call-2" class="sr-only">전화번호-3</label>
                                        <input type="text" class="form-control" id="call-2">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="phone">휴대전화</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="phone">
                                        -
                                        <label for="phone-1" class="sr-only">전화번호-2</label>
                                        <input type="text" class="form-control" id="phone-1">
                                        -
                                        <label for="phone-2" class="sr-only">전화번호-3</label>
                                        <input type="text" class="form-control" id="phone-2">
                                    </td>
                                </tr>
                                <tr>
                                    <th>비회원 구매 및 결제 개인 정보취급방침</th>
                                    <td class="non-member">
                                        <p>비회원 구매 및 결제 개인정보취급방침에 대하여 동의합니다</p>
                                        <input type="radio" id="consent" class="radio">
                                        <label for="consent">동의함</label>
                                        <input type="radio" id="not-consent" class="radio">
                                        <label for="not-consent">동의안함</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
            <article class="address-info">
                <div class="container">
                    <h3>배송지정보</h3>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th class="required">배송지 선택</th>
                                    <td class="select-addr">
                                        <input type="radio" id="same" class="radio">
                                        <label for="same">주문자와 동일</label>
                                        <input type="radio" id="new-addr" class="radio">
                                        <label for="new-addr">새로운 배송지</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="recipient">주문자</label></th>
                                    <td><input type="text" class="form-control" id="recipient"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="addr-00">주소</label></th>
                                    <td class="address">
                                        <input type="text" class="form-control" id="addr-00">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default" role="button">우편번호 검색</a>
                                            </p>
                                        </div>
                                        <label for="addr-02" class="sr-only">주소-2</label>
                                        <input type="text" class="form-control" id="addr-02">
                                        <label for="addr-03" class="sr-only">주소-3</label>
                                        <input type="text" class="form-control" id="addr-03">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="call-00">전화번호</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="call-00">
                                        -
                                        <label for="call-01" class="sr-only">전화번호-2</label>
                                        <input type="text" class="form-control" id="call-01">
                                        -
                                        <label for="call-02" class="sr-only">전화번호-3</label>
                                        <input type="text" class="form-control" id="call-02">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="phone-00">휴대전화</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="phone-00">
                                        -
                                        <label for="phone-01" class="sr-only">전화번호-2</label>
                                        <input type="text" class="form-control" id="phone-01">
                                        -
                                        <label for="phone-02" class="sr-only">전화번호-3</label>
                                        <input type="text" class="form-control" id="phone-02">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="message">배송메지지</label></th>
                                    <td>
                                        <input type="text" class="form-control" id="message">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
            <article class="coupon-point">
                <div class="container">
                    <h3>쿠폰/적립금</h3>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="point">적립금</label></th>
                                    <td class="point">
                                        <input type="text" class="form-control" id="point" placeholder="0">
                                        <dl>
                                            <dt>원(총 사용가능 적립금</dt>
                                            <dd>3,000원)</dd>
                                        </dl>
                                        <p class="attention">
                                            적립금은 최소 1,000 이상일 때 결제가 가능 합니다
                                        </p>
                                        <p class="attention">
                                            1회 구매시 적립금 최대 사용금액은 3,000 입니다.
                                        </p>
                                        <p class="attention">
                                            적립금으로만 결제할 경우. 결제금액이 0으로 보여 지는것이 정상이며[결제하기]버튼을 누르면 주문이 완료됩니다.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>쿠폰</th>
                                    <td>
                                        <input type="radio" id="bonus-coupon" class="radio">
                                        <label for="bonus-coupon">보너스쿠폰</label>
                                        <select class="form-control">
                                            <option value="">적용 가능한 쿠폰이 없습니다</option>
                                            <option value="">적용 가능한 쿠폰이 없습니다</option>
                                        </select>
                                        <input type="radio" id="product-coupon" class="radio">
                                        <label for="product-coupon">상품쿠폰</label>
                                        <select class="form-control">
                                            <option value="">적용 가능한 쿠폰이 없습니다</option>
                                            <option value="">적용 가능한 쿠폰이 없습니다</option>
                                        </select>
                                        <p class="attention">
                                            상품쿠폰과 보너스 쿠폰은 중복사용이 불가능 합니다.
                                        </p>
                                        <p class="attention">
                                            보너스쿠폰 중 할인쿠폰은 이미 할인을 하는 상품에 대해서는 중복 적용이 되지 않습니다
                                        </p>
                                        <p class="attention">
                                            상품 중 일부 상품(할인쿠폰제외상품)은 할인 쿠폰이 적용되자 않습니다.
                                        </p>
                                        <p class="attention">
                                            무료배송 보너스 쿠폰은 주문 금액 기준입니다.
                                        </p>
                                        <p class="attention">
                                            무료배송쿠폰은 총결제액(마일리지및 쿠폰적용 금액)기준 10,000원 이상일 경우만 사용가능 합니다.
                                        </p>
                                        <p class="attention">
                                            업체조건배송상품은 무료배송 쿠폰 적용이 불가합니다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
            <article class="sum-payment">
                <div class="container">
                    <h3>결제예정금액</h3>
                    <div class="table-wrap sum-total">
                        <table class="table">
                            <colgroup>
                                <col style="width: 72px;">
                                <col style="width: 140px;">
                                <col style="width: 88px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>총 상품금액</th>
                                    <th>총 배송비</th>
                                    <th>결제예정금액</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>289,000원</td>
                                    <td>+0원</td>
                                    <td class="total">=289,000원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>결제수단</h3>
                    <div class="methods-pay">
                        <div class="choice-first">
                            <input type="radio" id="card" class="radio">
                            <label for="card">카드결제</label>
                            <input type="radio" id="escrow" class="radio">
                            <label for="escrow">에스크로(실시간 계좌이체)</label>
                        </div>
                        <div class="choice-last">
                            <input type="radio" id="bank" class="radio">
                            <label for="bank">무통장입금</label>
                            <input type="radio" id="phone-pay" class="radio">
                            <label for="phone-pay">핸드폰결제</label>
                        </div>
                    </div>
                    <p class="attention">최소 결제 가능 금액은 결제금액에서 배송비를 제외한 금액 입니다.</p>
                    <p class="attention">소액 결제의 경우 PG사 정책에 따라 결제 금액 제한이 있을수 있습니다.</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">결제하기</a>
                        </p>
                    </div>
                </div>
            </article>
            <article class="monthly">
                <div class="container">
                    <h3>무이자 할부 이용안내</h3>
                    <div>
                        무이자할무가 적용되자 않는 상품과 무이자할부가 가능한 상품을 동시에 구매할 경우 전체 주문 상품 금액에 대해 무이자할부가 적용되지 않습니다.<br>
                        무이자할부를 원하시는 경우 장바구니에서 무이자할부 상품만 선택하여 주문하여 주시기 바랍니다.
                    </div>
                </div>
            </article>
            <article class="monthly">
                <div class="container">
                    <h3>이용안내</h3>
                    <div>
                        Window / XP 서비스팩2를 설치하신후 결제가 정산적인 단계로 처리되지 않는경우, 아래의 절차에 따라 해결하시기 바랍니다.
                        <ul>
                            <li>안심클릭 결제모듈이 설치되지 않은 경우 ActiveX 수동설치</li>
                            <li>Service Pack 2에 대한 Microsoft사의 상세안내</li>
                        </ul>
                    </div>
                </div>
            </article>
        </form>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
