<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content member">
        <div class="page-header">
            <div class="section-header">
                <h2>비밀번호찾기</h2>
            </div>
        </div>
        <article class="id-find">
            <div class="container">
                <div class="find-form">
                    <p class="title">비밀번호 찾기 2단계 힌트 답변 입력</p>
                    <input type="text" class="form-control" id="question" placeholder="질문">
                    <label for="question" class="sr-only">질문</label>
                    <input type="text" class="form-control" id="answer" placeholder="답변">
                    <label for="answer" class="sr-only">답변</label>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">확인</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
