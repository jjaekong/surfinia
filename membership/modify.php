<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership modify">
        <div class="container">
            <section class="member-modify">
                <div class="section-header">
                    <h1>회원정보수정</h1>
                </div>
                <div class="table-wrap">
                    <form class="modify-form">
                        <table class="table table-border">
                            <colgroup>
                                <col style=" width: 170px;">
                                <col style=" width: 1000px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>아이디<i>*</i></th>
                                    <td>surfinia</td>
                                </tr>
                                <tr>
                                    <th><label for="user-pw">비밀번호<i>*</i></label></th>
                                    <td>
                                        <input type="password" id="user-pw" class="type-txt">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="pw-check">비밀번호확인<i>*</i></label></th>
                                    <td>
                                        <input type="password" id="pw-check" class="type-txt">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="user-name">이름<i>*</i></label></th>
                                    <td>
                                        <input type="text" id="user-name" class="type-txt">
                                    </td>
                                </tr>
                                <tr>
                                    <th>성별<i>*</i></th>
                                    <td>
                                        <input type="radio" id="man" class="radio">
                                        <label for="man">남</label>
                                        <input type="radio" id="woman" class="radio">
                                        <label for="woman">여</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>생년월일<i>*</i></th>
                                    <td>
                                        <input type="text" id="year" class="year">
                                        <label for="year">년</label>
                                        <input type="text" id="month" class="month">
                                        <label for="month">월</label>
                                        <input type="text" id="day" class="day">
                                        <label for="day">일</label>
                                        <input type="radio" id="solar-calendar" class="radio">
                                        <label for="solar-calendar">양력</label>
                                        <input type="radio" id="lunar-calendar" class="radio">
                                        <label for="lunar-calendar">음력</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="addr">주소<i>*</i></label></th>
                                    <td>
                                        <input type="text" id="addr" class="addr">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-white" role="button">우편번호찾기</a>
                                            </p>
                                        </div>

                                        <input type="text" id="addr-2" class="address">
                                        <label for="addr-2">기본주소</label>

                                        <input type="text" id="addr-3" class="address">
                                        <label for="addr-3">나머지주소</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="tel">일반전화</label></th>
                                    <td>
                                        <select id="tel">
                                            <option value="">02</option>
                                            <option value="">031</option>
                                            <option value="">032</option>
                                        </select> -
                                        <input type="text" id="tel-2" class="tel"> -
                                        <label for="tel-2" class="sr-only"></label>
                                        <input type="text" id="tel-3" class="tel">
                                        <label for="tel-3" class="sr-only"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="phone">휴대전화<i>*</i></label></th>
                                    <td>
                                        <select id="phone">
                                            <option value="">010</option>
                                        </select> -
                                        <input type="text" id="phone-2" class="phone"> -
                                        <label for="phone-2" class="sr-only"></label>
                                        <input type="text" id="phone-3" class="phone">
                                        <label for="phone-3" class="sr-only"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="email">이메일<i>*</i></label></th>
                                    <td>
                                        <input type="text" id="email" class="email"> @
                                        <input type="text" id="domain" class="email">
                                        <label for="domain" class="sr-only"></label>
                                        <select>
                                            <option value="">naver.com</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일 수신여부<i>*</i></th>
                                    <td>
                                        <input type="radio" id="receive-mail" class="radio">
                                        <label for="receive-mail">수신함</label>
                                        <input type="radio" id="no-receive-mail" class="radio">
                                        <label for="no-receive-mail">수신안함</label>
                                        <p>
                                            메일 수신동의를 하시면 서피니아에서 진해되는 이벤트나 각종 할일 혜택 정보 등을 받아보실 수 있습니다.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>SMS 수신여부<i>*</i></th>
                                    <td>
                                        <input type="radio" id="receive-sms" class="radio">
                                        <label for="receive-sms">수신함</label>
                                        <input type="radio" id="no-receive-sms" class="radio">
                                        <label for="no-receive-sms">수신안함</label>
                                        <p>
                                            SMS 수신동의를 하시면 서피니아에서 진해되는 이벤트나 각종 할일 혜택 정보 등을 받아보실 수 있습니다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="btn-area">
                    <p>
                        <button class="btn btn-green" type="submit">확인</button>
                        <a href="#" class="btn btn-white">취소</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
