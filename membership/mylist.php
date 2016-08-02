<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
<link href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership mylist">
        <div class="container">
            <section class="inquiry">
                <div class="section-header">
                    <h1>주문조회</h1>
                </div>
                <ul class="my-menu">
                    <li class="active"><a href="#">주문내역조회</a></li>
                    <li><a href="#">취소/반품/교환 내역</a></li>
                </ul>
                <div class="order">
                    <ul>
                        <li class="active"><a href="#">오늘</a></li>
                        <li><a href="#">1주일</a></li>
                        <li><a href="#">1개월</a></li>
                        <li><a href="#">3개월</a></li>
                        <li><a href="#">6개월</a></li>
                    </ul>
                    <div class="calendar">
                        <input type="text" id="datepicker">
                        <label for="datepicker">
                            <img src="/assets/images/membership/calendar_btn.png" alt="시작날짜조회">
                        </label> ~
                        <input type="text" id="datepicker-2">
                        <label for="datepicker-2">
                            <img src="/assets/images/membership/calendar_btn.png" alt="종료날짜조회">
                        </label>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-green" role="button">조회</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width:158px;">
                            <col style="width:130px;">
                            <col style="width:417px;">
                            <col style="width:101px;">
                            <col style="width:126px;">
                            <col style="width:127px;">
                            <col style="width:128px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>주문일자<br>(주문번호)</th>
                                <th>이미지</th>
                                <th>상품정보</th>
                                <th>수량</th>
                                <th>상품구매금액</th>
                                <th>주문처리상태</th>
                                <th>취소/교환/반품</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    2016-07-07<br><a href="#">(298383929300)</a>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white" role="button">주문취소</a>
                                            <a href="#" class="btn btn-white" role="button">교환신청</a>
                                        </p>
                                    </div>
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
                                <td>1</td>
                                <td>27,000원</td>
                                <td>결제완료</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        (function($) {
            $("#datepicker, #datepicker-2").datepicker({
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
