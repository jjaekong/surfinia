<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community review-list">
        <div class="container">
            <section class="review">
                <div class="section-header">
                    <h1>상품후기</h1>
                </div>
                <div class="table-wrap">
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
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 66px;">
                            <col style=" width: 166px;">
                            <col style=" width: 635px;">
                            <col style=" width: 101px;">
                            <col style=" width: 101px;">
                            <col style=" width: 101px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>상품</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>
                                   <p>
                                       <img src="/assets/images/community/review_img01.jpg" alt="상품이미지">
                                   </p>
                                    샘플아이템
                                </td>
                                <td><a href="#">아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                   <p>
                                       <img src="/assets/images/community/review_img01.jpg" alt="상품이미지">
                                   </p>
                                    샘플아이템
                                </td>
                                <td><a href="#">아주 맘에 드네요!</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                   <p>
                                       <img src="/assets/images/community/review_img01.jpg" alt="상품이미지">
                                   </p>
                                    샘플아이템
                                </td>
                                <td><a href="#">아주 맘에 드네요!</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                   <p>
                                       <img src="/assets/images/community/review_img01.jpg" alt="상품이미지">
                                   </p>
                                    샘플아이템
                                </td>
                                <td><a href="#">아주 맘에 드네요!</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                   <p>
                                       <img src="/assets/images/community/review_img01.jpg" alt="상품이미지">
                                   </p>
                                    샘플아이템
                                </td>
                                <td><a href="#">아주 맘에 드네요!</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
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
