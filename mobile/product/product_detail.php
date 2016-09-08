<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/product.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content product product-detail">
        <header>
            <p>
                <img src="/mobile/images/product/product_detail_img01.jpg" class="img-responsive" alt="제품 상세이미지">
            </p>
            <div class="details">
                <div class="best-new">
                    <span class="label label-best">BEST</span>
                    <span class="label label-new">NEW</span>
                </div>
                <h3>블랑켓 샘플상품</h3>
                <p>
                    러프한 느낌으로 도톰한 두께의 슬랍이 특징인 린넨 100% 인디언핑크 컬러
                </p>
            </div>
        </header>
        <div class="container">
            <article class="detail-content">
                <div class="article-header">
                    <h4>옵션 선택하기</h4>
                    <ul>
                        <li>
                            <a href="#"><img src="/mobile/images/product/sns_img01.png" alt="SNS 아이콘"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/mobile/images/product/sns_img02.png" alt="SNS 아이콘"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/mobile/images/product/sns_img03.png" alt="SNS 아이콘"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/mobile/images/product/sns_img04.png" alt="SNS 아이콘"></a>
                        </li>
                    </ul>
                </div>
                <div class="article-content">
                    <ul>
                        <li>
                            <dl>
                                <dt>판매가격</dt>
                                <dd>50,000원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>적립금</dt>
                                <dd>50원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>제조사</dt>
                                <dd>서피니아</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사이즈</dt>
                                <dd>
                                    <select class="form-control">
                                        <option value="">L</option>
                                        <option value="">M</option>
                                        <option value="">S</option>
                                    </select>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>색상</dt>
                                <dd>
                                    <select class="form-control">
                                        <option value="">색상선택</option>
                                        <option value="">M</option>
                                        <option value="">S</option>
                                    </select>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>수량</dt>
                                <dd>
                                    <div class="btn-count">
                                        <p>
                                            <a href="#" class="btn btn-minus" role="button"></a>
                                            <span>1</span>
                                            <a href="#" class="btn btn-plus" role="button"></a>
                                        </p>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
