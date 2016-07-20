<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="search-result">
        <div class="container">
            <section class="search">
                <div class="section-header">
                    <h1>상품검색</h1>
                </div>
                <div class="detailed-search">
                    <form class="search-form">
                        <dl class="inline-dl">
                            <dt>상품분류</dt>
                            <dd>
                                <select>
                                    <option value="">상품분류 선택</option>
                                </select>
                            </dd>
                            <dt>검색조건</dt>
                            <dd>
                                <select class="terms-select">
                                    <option value="">상품명</option>
                                </select>
                                <label for="terms" class="sr-only">검색조건</label>
                                <input type="text" id="terms" class="terms">
                            </dd>
                            <dt>판매가격대</dt>
                            <dd>
                                <label for="high" class="sr-only">높은가격</label>
                                <input type="text" id="high"> ~
                                <label for="low" class="sr-only">낮은가격</label>
                                <input type="text" id="low">
                            </dd>
                            <dt>검색정렬기준</dt>
                            <dd>
                                <select>
                                    <option value="">기준선택</option>
                                </select>
                            </dd>
                        </dl>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-green" role="button">검색</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="result-list">
                    <p class="result-text"><b>총 16개</b>의 상품이 검색되었습니다.</p>
                    <ul class="terms-list">
                        <li class="active"><a href="#">신상품순</a></li>
                        <li><a href="#">인기상품순</a></li>
                        <li><a href="#">낮은가격순</a></li>
                        <li><a href="#">높은가격순</a></li>
                    </ul>
                    <ul class="product-item">
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list01.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/new/product_list02.jpg" alt="">
                                </p>
                                <h4>샘플아이템 01</h4>
                                <p class="place">40,000 won</p>
                                <p class="lable-wrap">
                                    <span class="lable label-default lable-green">BEST</span>
                                    <span class="lable label-default lable-white">NEW</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#">&laquo;</a>
                            </li>
                            <li>
                                <a href="#">&lsaquo;</a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#">&rsaquo;</a>
                            </li>
                            <li>
                                <a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
