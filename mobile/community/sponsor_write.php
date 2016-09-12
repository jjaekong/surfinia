<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content community">
        <div class="page-header">
            <div class="section-header">
                <h2>협찬사진</h2>
            </div>
        </div>
        <div class="container">
            <article class="sponsor-write">
                <nav class="sns">
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
                </nav>
                <div class="article-header">
                    <h3>아주 맘에 드네요!아주 맘에 드네요!아주 맘에 드네요!</h3>
                    <ul>
                        <li>2016. 08. 30</li>
                        <li>홍길동</li>
                        <li>
                            <dl>
                                <dt>조회</dt>
                                <dd>100</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="article-content">
                    <div class="view-content">
                        content 내용
                    </div>
                    <dl class="file">
                        <dt>파일</dt>
                        <dd>1111.jpg</dd>
                    </dl>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-basics btn-gray" role="button">목록</a>
                        <a href="#" class="btn btn-basics btn-default" role="button">수정</a>
                        <a href="#" class="btn btn-basics btn-default" role="button">삭제</a>
                    </p>
                </div>
            </article>
            <article class="comment">
                <form>
                    <h3>COMMENT</h3>
                    <dl class="comment-form">
                        <dt><label for="user-name">이름</label></dt>
                        <dd><input type="text" class="form-control" id="user-name"></dd>
                        <dt><label for="user-pw">패스워드</label></dt>
                        <dd><input type="password" class="form-control" id="user-pw"></dd>
                    </dl>
                    <label for="comment-content" class="sr-only">내용</label>
                    <textarea id="comment-content"></textarea>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">글쓰기</a>
                        </p>
                    </div>
                    <ul class="reply">
                        <li>
                            <dl>
                                <dt>abc111</dt>
                                <dd>(2016-03-27 오후 6:00:00)</dd>
                            </dl>
                            <p class="reply-content">
                                댓글내용입니다. 댓글내용입니다. 댓글내용입니다.댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.
                            </p>
                            <p class="modify-del">
                                <a href="#" class="btn-modify" role="button"></a>
                                <a href="#" class="btn-del" role="button"></a>
                            </p>
                        </li>
                        <li>
                            <dl>
                                <dt>abc111</dt>
                                <dd>(2016-03-27 오후 6:00:00)</dd>
                            </dl>
                            <p class="reply-content">
                                댓글내용입니다. 댓글내용입니다. 댓글내용입니다.댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.
                            </p>
                            <p class="modify-del">
                                <a href="#" class="btn-modify" role="button"></a>
                                <a href="#" class="btn-del" role="button"></a>
                            </p>
                        </li>
                    </ul>
                </form>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
