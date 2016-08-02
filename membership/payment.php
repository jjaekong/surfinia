<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership bascat payment">
        <div class="container">
            <section class="bascat-info">
                <div class="section-header">
                    <h1>장바구니</h1>
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
                                    <a href="#">샘플아이템</a><br>
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
                    <p>상품의 옵션 및 수량 변경은 상품상세 또는 장바구니에서 가능합니다</p>
                </div>
                <div class="user-info">
                    <h2>주문자정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="an-orderer">주문하시는 분</label></th>
                                    <td><input type="text" id="an-orderer" class="an-orderer"></td>
                                </tr>
                                <tr>
                                    <th><label for="orderer-addr1">주소</label></th>
                                    <td>
                                        <input type="text" id="orderer-addr1" class="address">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white" role="button">우편번호찾기</a>
                                            </p>
                                        </div>
                                        <input type="text" id="orderer-addr2" class="addr">
                                        <label for="orderer-addr2">기본주소</label>
                                        <input type="text" id="orderer-addr3" class="addr">
                                        <label for="orderer-addr3">나머지 주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>일반전화</th>
                                    <td>
                                        <select>
                                            <option value="">02</option>
                                        </select> -
                                        <input type="text" id="orderer-tel1" class="tel"> -
                                        <label for="orderer-tel1" class="sr-only">전화번호</label>
                                        <input type="text" id="orderer-tel2" class="tel">
                                        <label for="orderer-tel2" class="sr-only">전화번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>휴대전화</th>
                                    <td>
                                        <select>
                                            <option value="">010</option>
                                        </select> -
                                        <input type="text" id="orderer-phone1" class="phone"> -
                                        <label for="orderer-phone1" class="sr-only">휴대번호</label>
                                        <input type="text" id="orderer-phone2" class="phone">
                                        <label for="orderer-phone2" class="sr-only">휴대번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td>
                                        <input type="email" id="orderer-mail1" class="mail"> @
                                        <label for="orderer-mail1" class="sr-only">이메일주소</label>
                                        <input type="text" id="domain" class="mail">
                                        <label for="domain" class="sr-only">도메인</label>
                                        <select id="orderer-mail">
                                            <option value="">google.com</option>
                                        </select>
                                        <p>
                                            이메일을 통해 주문처리과정을 보내드립니다. <br> 이메일 주소란에는 반드시 수신가능한 이메일주소를 입력해 주세요.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="orderer-pw">주문조회 비밀번호</label></th>
                                    <td>
                                        <input type="password" id="orderer-pw" class="pw">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="confirm-pw">주문조회 비밀번호 확인</label></th>
                                    <td>
                                        <input type="password" id="confirm-pw" class="pw">
                                    </td>
                                </tr>
                                <tr>
                                    <th>비회원 구매 및 결제<br>개인정보취급방침</th>
                                    <td>
                                        <p>비회원 구매 및 결제 개인정보취급방침에 대하여 동의합니다.</p>
                                        <input type="radio" id="consent" class="radio">
                                        <label for="consent">동의함</label>
                                        <input type="radio" id="not-consent" class="radio">
                                        <label for="not-consent">동의안함</label>
                                        <textarea id="privacy"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="addr-info">
                    <h2>배송지정보</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>배송지 선택</th>
                                    <td>
                                        <input type="radio" id="same" class="radio">
                                        <label for="same">주문자 정보와 동일</label>
                                        <input type="radio" id="new-addr" class="radio">
                                        <label for="new-addr">새로운배송지</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="addressee">받으시는 분</label></th>
                                    <td>
                                        <input type="text" id="addressee" class="addressee">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="user-addr">주소</label></th>
                                    <td>
                                        <input type="text" id="user-addr" class="user-addr">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white" role="button">우편번호찾기</a>
                                            </p>
                                        </div>
                                        <input type="text" id="user-addr-2" class="addr">
                                        <label for="user-addr-2">기본주소</label>
                                        <input type="text" id="addressee-3" class="addr">
                                        <label for="addressee-3">나머지 주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>일반전화</th>
                                    <td>
                                        <select>
                                            <option value="">02</option>
                                        </select> -
                                        <input type="text" id="tel1" class="tel"> -
                                        <label for="tel1" class="sr-only">전화번호</label>
                                        <input type="text" id="tel2" class="tel">
                                        <label for="tel2" class="sr-only">전화번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>휴대전화</th>
                                    <td>
                                        <select>
                                            <option value="">010</option>
                                        </select> -
                                        <input type="text" id="phone1" class="phone"> -
                                        <label for="phone1" class="sr-only">휴대번호</label>
                                        <input type="text" id="phone2" class="phone">
                                        <label for="phone2" class="sr-only">휴대번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>배송메세지</th>
                                    <td>
                                        <textarea id="message"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="amount">
                    <h2>결제예정금액</h2>
                    <div class="table-wrap">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 390px;">
                                <col style=" width: 390px;">
                                <col style=" width: 390px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>총 주문금액</th>
                                    <th>총 할인 + 부가결제 금액</th>
                                    <th>총 결제예정 금액</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>289,000</strong>원</td>
                                    <td><strong>+0</strong>원</td>
                                    <td><strong>=289,000</strong>원</td>
                                </tr>
                            </tbody>
                        </table>
                        <dl class="inline-dl">
                            <dt>총 할인금액</dt>
                            <dd>0원</dd>
                            <dt>총 부가결제금액</dt>
                            <dd>0원</dd>
                        </dl>
                    </div>
                </div>
                <div class="total-payment">
                    <h2>결제수단</h2>
                    <div class="payment-method">
                        <input type="radio" id="card">
                        <label for="card">카드결제</label>
                        <input type="radio" id="escrow">
                        <label for="escrow">에스크로(실시간 계좌이체)</label>
                        <input type="radio" id="deposit">
                        <label for="deposit">무통장 입금</label>
                        <p>최소 결제 가능 금액은 결제금액에서 배송비를 제외한 금액입니다.</p>
                        <p>소액 결제의 경우 PG사 정책에 따라 결제 금액 제한이 있을 수 있습니다.</p>
                    </div>
                    <div class="total">
                        <ul>
                            <li>
                                <h3>카드 결제 최종결제 금액</h3>
                                <p class="sum-payment"><strong>289,000</strong>원</p>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-green" role="button">결제하기</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <dl class="inline-dl">
                                    <dt>총 적립예정 금액</dt>
                                    <dd><strong>0원</strong></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="inline-dl">
                                    <dt>상품별 적립금</dt>
                                    <dd>0원</dd>
                                    <dt>회원 적립금</dt>
                                    <dd>0원</dd>
                                    <dt>쿠폰 적립금</dt>
                                    <dd>0원</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
                <h2>무이자 할부 이용안내</h2>
                <div class="installment-guide">
                    무이자할부가 적용되지 않은 상품과 무이자할부가 가능한 상품을 동시에 구매할 경우 전체 주문 상품 금액에 대해 무이자할부가 적용되지 않습니다.<br>
                    무이자할부를 원하시는 경우 장바구니에서 무이자할부 상품만 선택하여 주문하여 주시기 바랍니다.
                </div>
                <h2>이용안내</h2>
                <div class="guide">
                    WindowXP 서비스팩2를 설치하신후 결제가 정상적인 단계로 처리되지 않는경우, 아래의 절차에 따라 해결하시기 바랍니다.
                    <ol>
                        <li>안심클릭 결제모듈이 설치되지 않은 경우 ActiveX 수동설치</li>
                        <li>Service Pack 2에 대한 Microsoft사의 상세안내</li>
                    </ol>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
