<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community qna">
        <div class="container">
            <section class="qna-info">
                <nav class="sub-menu">
                    <ul>
                        <li class="notice"><a href="/community/notice.php">NOTICE</a></li>
                        <li class="qna active"><a href="/community/qna.php">Q&amp;A</a></li>
                        <li class="review"><a href="/community/review_list.php">REVIEW</a></li>
                        <li class="event"><a href="/community/event.php">EVENT</a></li>
                        <li class="sponsorship"><a href="#">SPONSORSHIP</a></li>
                    </ul>
                </nav>
                <div class="section-header">
                    <h1>Q&amp;A</h1>
                </div>
                <div class="qna-list">
                    <ul>
                        <li class="active"><a href="#">상품문의</a></li>
                        <li><a href="#">교환&amp;반품문의</a></li>
                        <li><a href="#">배송문의</a></li>
                        <li><a href="#">주문결제문의</a></li>
                        <li><a href="#">기타문의</a></li>
                    </ul>
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
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="/community/qna_view.php">상품 문의 드립니다.</a></td>
                                <td>홍길동</td>
                                <td>2016-07-08</td>
                                <td>1</td>
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
</body>
</html>
