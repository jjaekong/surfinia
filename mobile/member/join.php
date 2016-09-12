<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/member.css" rel="stylesheet">
<link href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content member">
        <div class="page-header">
            <div class="section-header">
                <h2>회원가입</h2>
            </div>
        </div>
        <article class="join">
            <div class="container">
                <form>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th class="required"><label for="user-id">아이디</label></th>
                                    <td class="user-id">
                                        <input type="text" class="form-control" id="user-id">
                                        <p class="btn-confirm">
                                            <a href="#" class="btn" role="button">중복확인</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="user-name">이름</label></th>
                                    <td><input type="text" class="form-control" id="user-name"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="user-pw">비밀번호</label></th>
                                    <td><input type="password" class="form-control" id="user-pw"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="confirm-pw">비밀번호 확인</label></th>
                                    <td><input type="password" class="form-control" id="confirm-pw"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="pw-hint">비밀번호 힌트</label></th>
                                    <td><input type="text" class="form-control" id="pw-hint"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="pw-answer">비밀번호 정답</label></th>
                                    <td><input type="text" class="form-control" id="pw-answer"></td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="email">이메일</label></th>
                                    <td class="email">
                                        <input type="text" class="form-control" id="email">
                                        @
                                        <input type="text" class="form-control" id="domain">
                                        <label for="domain" class="sr-only">도메인</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="datepicker">생년월일</label></th>
                                    <td class="birth">
                                        <div class="calendar">
                                            <input type="text" class="form-control" id="datepicker">
                                        </div>
                                        <input type="radio" id="solar">
                                        <label for="solar">양력</label>
                                        <input type="radio" id="lunar">
                                        <label for="lunar">음력</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required">성별</th>
                                    <td>
                                        <input type="radio" id="man">
                                        <label for="man">남자</label>
                                        <input type="radio" id="girl">
                                        <label for="girl">여자</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="addr">주소</label></th>
                                    <td class="addr">
                                        <input type="text" class="form-control" id="addr">
                                        <p class="addr-btn">
                                            <a href="#" class="btn">우편번호 검색</a>
                                        </p>
                                        <input type="text" class="form-control" id="addr-2">
                                        <label for="addr-2" class="sr-only">기본주소</label>
                                        <input type="text" class="form-control" id="addr-3">
                                        <label for="addr-3" class="sr-only">상세주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="call">전화번호</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="call"> -
                                        <input type="text" class="form-control" id="call-2"> -
                                        <label for="call-2" class="sr-only">전화번호</label>
                                        <input type="text" class="form-control" id="call-3">
                                        <label for="call-3" class="sr-only">전화번호</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="phone">휴대전화</label></th>
                                    <td class="call">
                                        <input type="text" class="form-control" id="phone"> -
                                        <input type="text" class="form-control" id="phone-2"> -
                                        <label for="phone-2" class="sr-only">휴대전화</label>
                                        <input type="text" class="form-control" id="phone-3">
                                        <label for="phone-3" class="sr-only">휴대전화</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="phone">이메일<br>수신여부</label></th>
                                    <td class="email-sms">
                                        <input type="radio" id="email-receive">
                                        <label for="email-receive">수신함</label>
                                        <input type="radio" id="email-notreceive">
                                        <label for="email-notreceive">수신안함</label>
                                        <p>메일 수신동의를 하시면 서피니아에서 진행되는 이벤트나 각종 할인 혜택 정보 등을 받아보실 수 있습니다.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="required"><label for="phone">SMS<br>수신여부</label></th>
                                    <td class="email-sms">
                                        <input type="radio" id="sms-receive">
                                        <label for="sms-receive">수신함</label>
                                        <input type="radio" id="sms-notreceive">
                                        <label for="sms-notreceive">수신안함</label>
                                        <p>SMS 수신동의를 하시면 서피니아에서 진행되는 이벤트나 각종 할인 혜택 정보 등을 받아보실 수 있습니다.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="terms">
                        <h3>이용약관 동의</h3>
                        <div>
                            <h4>제1조(목적)</h4>
                            이 약관은 OO 회사(전자상거래 사업자)가 운영하는 OO 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리의무 및 책임사항을 규정함을 목적으로 합니다.<br>※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.
                        </div>
                        <p>이용약관에 동의하십니까?</p>
                        <input type="checkbox" id="terms-assent" class="check">
                        <label for="terms-assent" class="assent">동의함</label>
                        <h3>개인정보 수집 및 이용동의</h3>
                        <div>
                            <h4>제1조(목적)</h4>
                            이 약관은 OO 회사(전자상거래 사업자)가 운영하는 OO 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리의무 및 책임사항을 규정함을 목적으로 합니다.<br>※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.
                        </div>
                        <p>이용약관에 동의하십니까?</p>
                        <input type="checkbox" id="privacy-assent" class="check">
                        <label for="privacy-assent" class="assent">동의함</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-green" role="button">회원가입</a>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                        </p>
                    </div>
                </form>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        (function($) {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                changeMonth: true,
                changeYear: true,
                yearSuffix: '년'
            });
        })(jQuery);
    </script>
</body>
</html>
