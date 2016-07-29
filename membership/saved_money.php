<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership saved-money">
        <div class="container">
            <section class="my-money">
                <div class="section-header">
                    <h1>적립금</h1>
                </div>
                <div class="money-info">
                    <ul>
                        <li>
                            <dl class="inline-dl">
                                <dt>누적 적립금</dt>
                                <dd>0점</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>사용된 적립금</dt>
                                <dd>0점</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>사용가능 적립금</dt>
                                <dd>0점</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 215px;">
                            <col style=" width: 170px;">
                            <col style=" width: 275px;">
                            <col style=" width: 510px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>주문날짜</th>
                                <th>적립금</th>
                                <th>관련주문</th>
                                <th>내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2016-07-08</td>
                                <td>320점</td>
                                <td>20160708-0001948</td>
                                <td>구매에 대한 포인트 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
