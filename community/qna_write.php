<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community review-write qna-write">
        <div class="container">
            <section class="write">
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
                <div class="table-wrap">
					<form>
						<table class="table table-border">
							<colgroup>
								<col style=" width: 159px;">
								<col style=" width: 1011px;">
							</colgroup>
							<tbody>
								<tr>
									<th><label for="subject">제목</label></th>
									<td><input type="text" id="subject"></td>
								</tr>
								<tr>
									<th><label for="product-review">상품평</label></th>
									<td><textarea id="product-review" ></textarea></td>
								</tr>
								<tr>
									<th><label for="photo-file"></label>사진첨부</th>
									<td><input type="file" id="photo-file"></td>
								</tr>
								<tr>
									<th><label for="user-pw"></label>비밀번호</th>
									<td><input type="password" id="user-pw"></td>
								</tr>
							</tbody>
						</table>
					</form>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-green" role="button">등록</a>
                            <a href="#" class="btn btn-white" role="button">취소</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
