<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <section>
                <div class="section-header">
                    <h1>이벤트</h1>
                </div>
            </section>
            <div style="margin: 30px 0;">
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active">
                        <a href="#">진행중인 이벤트</a>
                    </li>
                    <li role="presentation">
                        <a href="#">종료된 이벤트</a>
                    </li>
                    <li role="presentation">
                        <a href="#">당첨자 발표</a>
                    </li>
                </ul>
            </div>

            <div class="search-form">
                <form>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="#">제목</option>
                            <option value="#">제목2</option>
                        </select>
                        <label for="search-keyword" class="sr-only">검색어</label>
                        <input id="search-keyword" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn">검색</button>
                </form>
            </div>

            <div class="btn-area" style="margin: 30px 0;">
                <p>
                    <a href="#" class="btn btn-green" role="button">BUY NOW</a>
                    <a href="#" class="btn btn-white" role="button">ADD TO CART</a>
                    <a href="#" class="btn btn-white like-btn" role="button">LIKE 10</a>
                </p>
            </div>

            <div class="table-wrap">
                <table class="table table-border">
                    <colgroup>
                        <col style=" width: 66px;">
                        <col style=" width: 801px;">
                        <col style=" width: 101px;">
                        <col style=" width: 101px;">
                        <col style=" width: 101px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일</th>
                            <th>조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>상품 문의 드립니다.</td>
                            <td>홍길동</td>
                            <td>2016-07-08</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div style="margin:30px 0;">
                <div class="lable-wrap">
                    <p class="lable label-default lable-green">BEST</p>
                    <p class="lable label-default lable-white">NEW</p>
                </div>
            </div>

            <div style="margin: 30px 0;">
            <ul class="menu-list">
                <li class="active"><a href="#">쓰로우</a></li>
                <li><a href="#">블랑켓</a></li>
                <li><a href="#">쓰로우</a></li>
            </ul>
            </div>

            <div style="margin: 30px 0;">
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
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
