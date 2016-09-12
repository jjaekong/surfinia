<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content community">
        <div class="page-header">
            <div class="section-header">
                <h2>비밀번호 확인</h2>
            </div>
        </div>
        <div class="container">
            <article class="confirm-pw">
                <form>
                    <h3>비밀번호를 입력해주세요</h3>
                    <p>글 작성시 입력하신 비밀번호를 입력해주세요.</p>
                    <input type="text" class="form-control" id="user-pw">
                    <label for="user-pw" class="sr-only">비밀번호 확인</label>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">확인</a>
                        </p>
                    </div>
                </form>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
