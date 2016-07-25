<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community review-view qna-view">
        <div class="container">
            <section class="view">
                <div class="section-header">
                    <h1>Q&amp;A</h1>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style=" width: 161px;">
                            <col style=" width: 1009px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>제목</th>
                                <td>아주 맘에 드네요!</td>
                            </tr>
                            <tr>
                                <th>작성자</th>
                                <td>홍길동</td>
                            </tr>
                            <tr>
                                <th>작성일</th>
                                <td>2016-07-08</td>
                            </tr>
                            <tr>
                                <th>상품</th>
                                <td>
                                   <div class="detail-view">
                                        <p>
                                            <a href="#">
                                                <img src="/assets/images/community/view_img01.jpg" alt="상품이미지">
                                            </a>
                                        </p>

                                       <h6><a href="#">샘플아이템</a></h6>
                                        <dl>
                                            <dt>옵션</dt>
                                            <dd> 00</dd>
                                        </dl>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <th>파일</th>
                                <td><a href="#">111.jpg</a></td>
                            </tr>
                            <tr>
                                <th><label for="user-pw"></label>비밀번호</th>
                                <td><input type="password" id="user-pw"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-white" role="button">목록</a>
                            <a href="#" class="btn btn-white" role="button">수정</a>
                            <a href="#" class="btn btn-white" role="button">삭제</a>
                            <a href="#" class="btn btn-white" role="button">답변</a>
                        </p>
                    </div>
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
