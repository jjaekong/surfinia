<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content member login-common">
        <div class="page-header"></div>
        <article class="login">
            <div class="container">
                <nav class="login-nonmember">
                    <ul>
                        <li class="active">
                            <a href="#">로그인</a>
                        </li>
                        <li>
                            <a href="#">비회원 로그인</a>
                        </li>
                    </ul>
                </nav>
                <div class="login-form">
                    <input type="text" class="form-control" id="user-id" placeholder="ID 입력">
                    <label for="user-id" class="sr-only">아이디</label>
                    <input type="text" class="form-control" id="user-pw" placeholder="비밀번호 입력">
                    <label for="user-pw" class="sr-only">비밀번호</label>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">로그인 하기</a>
                        </p>
                    </div>
                    <ul>
                        <li>
                            <a href="#">아이디 찾기</a>
                        </li>
                        <li>
                            <a href="#">비밀번호 찾기</a>
                        </li>
                        <li>
                            <a href="#">회원가입</a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
