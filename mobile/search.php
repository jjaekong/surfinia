<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content">
        <div class="page-header">
            <div class="section-header">
                <h2>상품검색</h2>
            </div>
        </div>
        <article class="search-success">
            <form>
                <div class="container">
                    <div class="article-header">
                        <dl>
                            <dt>상품분류</dt>
                            <dd>
                                <select class="form-control">
                                    <option value="">상품분류 선택</option>
                                    <option value="">상품분류 선택2</option>
                                </select>
                            </dd>
                            <dt>검색조건</dt>
                            <dd class="condition">
                                <select class="form-control">
                                    <option value="">상품명</option>
                                </select>
                                <input type="text" class="form-control" id="search-condition">
                                <label for="search-condition" class="sr-only">검색키워드</label>
                            </dd>
                        </dl>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-green" role="button">검색</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="container">
                        <p class="success">총 16개의 상품이 검색되었습니다</p>
                        <select class="form-control">
                            <option value="">높은가격순</option>
                            <option value="">낮은가격순</option>
                        </select>
                        <ul class="row">
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4">
                                <a href="#">
                                    <p class="item">
                                        <img src="/mobile/images/sub/search_success_img.jpg" class="img-responsive" alt="검색상품 이미지">
                                    </p>
                                    <div class="details">
                                        <h3>샘플아이템 01</h3>
                                        <p class="amount">40,000won</p>
                                        <div class="best-new">
                                            <span class="label label-best">BEST</span>
                                            <span class="label label-new">NEW</span>
                                        </div>
                                    </div>
                                </a>
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
                </div>
            </form>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
