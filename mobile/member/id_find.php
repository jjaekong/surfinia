<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content member">
        <div class="page-header">
            <div class="section-header">
                <h2>아이디찾기</h2>
            </div>
        </div>
        <article class="id-find">
            <div class="container">
                <div class="find-form">
                    <p class="title">회원 가입시 작성하셨던 정보를 입력해주세요.</p>
                    <select>
                        <option value="">개인회원</option>
                    </select>
                    <input type="radio" class="radio" id="email">
                    <label for="email">이메일</label>
                    <input type="radio" class="radio" id="phone">
                    <label for="phone">휴대폰</label>
                    <input type="text" class="form-control" id="user-name" placeholder="이름">
                    <label for="user-name" class="sr-only">이름</label>
                    <input type="text" class="form-control" id="user-email" placeholder="이메일">
                    <label for="user-email" class="sr-only">이메일</label>
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
