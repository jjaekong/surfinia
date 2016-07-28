<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community event-write">
        <div class="container">
            <section class="event-info">
                <div class="section-header">
                    <h1>협찬사진</h1>
                </div>
                <h2>TVN 금토드라마 "디어마이프렌즈"</h2>
                <ul class="sns-menu">
                    <li>
                        <a href="#"><img src="/assets/images/community/sns_img01.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/assets/images/community/sns_img02.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/assets/images/community/sns_img03.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/assets/images/community/sns_img04.png" alt=""></a>
                    </li>
                </ul>
                <div class="event-view">
                    <div class="event-header">
                        <ul>
                            <li>
                                <dl class="inline-dl">
                                    <dt>작성자</dt>
                                    <dd>관리자</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="inline-dl">
                                    <dt>조회</dt>
                                    <dd>10000</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="inline-dl">
                                    <dt>작성일</dt>
                                    <dd>2016-07-06</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <div class="attach">
                            <dl class="inline-dl">
                                <dt>첨부파일</dt>
                                <dd><a href="#">0.jpg</a></dd>
                                <dd><a href="#">0.jpg</a></dd>
                                <dd><a href="#">0.jpg</a></dd>
                                <dd><a href="#">0.jpg</a></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p class="first-btn">
                            <a href="#" class="btn btn-white" role="button">수정</a>
                            <a href="#" class="btn btn-white" role="button">삭제</a>
                        </p>
                        <p class="last-btn">
                            <a href="#" class="btn btn-black" role="button">목록보기</a>
                        </p>
                    </div>
                </div>
                <div class="comment">
                    <h3>COMMENT</h3>
                    <div class="comment-write">
						<form>
							<label for="user-name">이름</label>
							<input type="text" id="user-name">
							<label for="user-pw">패스워드</label>
							<input type="password" id="user-pw">
							<label for="comment-content" class="sr-only"></label>
							<textarea id="comment-content"></textarea>
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-green" role="button">글쓰기</a>
								</p>
							</div>
						</form>
                    </div>
                    <ul class="comment-view">
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                    </ul>
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
