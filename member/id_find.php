<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member find id-find">
        <div class="container">
            <section class="member-find">
                <div class="section-header">
                    <h1>아이디찾기</h1>
                </div>
                <div class="section-content">
                    <form class="find-form">
                        <h2>회원가입시 작성하셨던 정보를 입력해주세요.</h2>
                        <div class="form-group">
                            <label for="member-type">회원유형</label>
                            <select id="member-type">
                                <option value="">개인회원</option>
                            </select>
                            <div class="choice">
                                <input type="radio" id="email" class="radio">
                                <label for="email">이메일</label>
                                <input type="radio" id="phone" class="radio">
                                <label for="phone">휴대폰</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user-name">이름</label>
                            <input type="text" class="form-control" id="user-name">
                        </div>
                        <div class="form-group">
                            <label for="user-email">이메일</label>
                            <input type="email" class="form-control" id="user-email">
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
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
