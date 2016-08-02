<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member login non-inquiry">
        <div class="container">
            <section class="member-login">
                <div class="section-header">
                    <h1>로그인</h1>
                </div>
                <div class="section-content">
                    <form class="login-form">
                        <h2>LOGIN</h2>
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
                            </p>
                        </div>
                        <ul>
                            <li><a href="#">아이디 찾기</a></li>
                            <li><a href="#">비밀번호 찾기</a></li>
                            <li><a href="#">회원가입</a></li>
                        </ul>
                    </form>
                    <form class="nonmember-form">
                        <h2>NON-MEMBER LOGIN</h2>
                        <div class="form-group">
                            <label for="user-name">이름</label>
                            <input type="text" class="form-control" id="user-name">
                        </div>
                        <div class="form-group">
                            <label for="inquiry">주문번호</label>
                            <input type="text" class="form-control inquiry" id="inquiry">
                            <span>-</span>
                            <label for="last-inquiry" class="sr-only">주문번호</label>
                            <input type="text" class="form-control inquiry" id="last-inquiry">
                        </div>
                        <div class="form-group">
                            <label for="non-meber-pw">비밀번호</label>
                            <input type="password" class="form-control" id="non-meber-pw">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button class="btn btn-green" type="submit">비회원 주문조회</button>
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
