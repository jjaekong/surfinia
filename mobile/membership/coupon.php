<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>마이쿠폰</h2>
            </div>
        </div>
        <article class="coupon">
            <div class="container">
                <h3>쿠폰인증번호 등록하기</h3>
                <div class="btn-coupon">
                    <p>
                        <input type="text" class="form-control" id="coupon-num">
                        <label for="coupon-num" class="sr-only">쿠폰인증번호 입력</label>
                        <a href="#" class="btn-aqua">쿠폰번호 인증</a>
                    </p>
                </div>
                <ul class="coupon-history">
                    <li>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 90px;">
                                    <col style="width: 210px;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>번호</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰명</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰적용상품</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>구매금액</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>결제수단</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>할인액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>적립액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>사용가능시간</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 90px;">
                                    <col style="width: 210px;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>번호</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰명</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰적용상품</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>구매금액</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>결제수단</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>할인액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>적립액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>사용가능시간</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 90px;">
                                    <col style="width: 210px;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>번호</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰명</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>쿠폰적용상품</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>구매금액</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>결제수단</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>할인액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>적립액(률)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>사용가능시간</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
                <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
