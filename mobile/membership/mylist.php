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
                <h2>주문조회</h2>
            </div>
        </div>
        <article class="mylist">
            <div class="container">
                <nav class="inquiry-revoke">
                    <ul>
                        <li class="active">
                            <a href="#">주문내역조회</a>
                        </li>
                        <li>
                            <a href="#">취소/반품/교환 내역</a>
                        </li>
                    </ul>
                </nav>
                <div class="inquiry">
                    <ul>
                        <li class="active"><a href="#">오늘</a></li>
                        <li><a href="#">1주일</a></li>
                        <li><a href="#">1개월</a></li>
                        <li><a href="#">3개월</a></li>
                        <li><a href="#">4개월</a></li>
                    </ul>
                    <div class="calendar">
                        <input type="text" class="form-control" id="datepicker">
                        &nbsp; ~ &nbsp;
                        <input type="text" class="form-control" id="datepicker-2">
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">조회</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <article class="product-info">
            <div class="container">
                <ul class="order-list">
                    <li>
                        <div class="order-head">
                            <p class="date">2016-07-07</p>
                            <dl>
                                <dt>주문번호</dt>
                                <dd><a href="#">298383929300</a></dd>
                            </dl>
                        </div>
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
                    </li>
                    <li>
                        <div class="order-head">
                            <p class="date">2016-07-07</p>
                            <dl>
                                <dt>주문번호</dt>
                                <dd><a href="#">298383929300</a></dd>
                            </dl>
                        </div>
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
                    </li>
                    <li>
                        <div class="order-head">
                            <p class="date">2016-07-07</p>
                            <dl>
                                <dt>주문번호</dt>
                                <dd><a href="#">298383929300</a></dd>
                            </dl>
                        </div>
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
                    </li>
                    <li>
                        <div class="order-head">
                            <p class="date">2016-07-07</p>
                            <dl>
                                <dt>주문번호</dt>
                                <dd><a href="#">298383929300</a></dd>
                            </dl>
                        </div>
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
                    </li>
                </ul>
                <div style="margin: 20px 0;">
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
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
