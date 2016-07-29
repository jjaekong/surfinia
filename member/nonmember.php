<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member nonmember login">
        <div class="container">
            <section class="member-login">
                <div class="section-header">
                    <h1>로그인</h1>
                </div>
                <div class="section-content">
                    <form class="login-form">
                        <div class="form-group">
                            <label for="user-id">아이디</label>
                            <input type="text" class="form-control" id="user-id">
                        </div>
                        <div class="form-group">
                            <label for="user-pw">비밀번호</label>
                            <input type="password" class="form-control" id="user-pw">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button class="btn btn-green" type="submit">로그인</button>
                                <a href="#" class="btn btn-gray" role="button">비회원 구매하기</a>
                            </p>
                        </div>
                        <ul>
                            <li><a href="#">아이디 찾기</a></li>
                            <li><a href="#">비밀번호 찾기</a></li>
                            <li><a href="#">회원가입</a></li>
                        </ul>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
