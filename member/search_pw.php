<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member find pw-find">
        <div class="container">
            <section class="member-find">
                <div class="section-header">
                    <h1>비밀번호찾기</h1>
                </div>
                <div class="section-content">
                    <form class="find-form">
                        <h2>비밀번호 찾기 2단계 힌트 답변 입력</h2>
                        <div class="form-group">
                            <label for="question">질문</label>
                            <input type="text" class="form-control" id="question">
                        </div>
                        <div class="form-group">
                            <label for="answer">답변</label>
                            <input type="text" class="form-control" id="answer">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button class="btn btn-green" type="submit">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
