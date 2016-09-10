<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>장바구니</h2>
            </div>
        </div>
        <article class="basket">
            <div class="container">
                <div class="btn-area btn-del">
                    <p class="btn-del">
                        선택상품을 <a href="#" class="btn btn-xs btn-default" role="button">삭제</a>
                    </p>
                </div>
                <ul>
                    <li>
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
                    </li>
                    <li>
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
                    </li>
                </ul>
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
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-green" role="button">전체상품주문</a>
                        <a href="#" class="btn btn-sm btn-default" role="button">선택상품주문</a>
                    </p>
                    <p>
                        <a href="#" class="btn btn-lg btn-default" role="button">쇼핑계속하기</a>
                    </p>
                </div>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
