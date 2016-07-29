<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member success">
        <div class="container">
            <section class="join-success">
                <div class="section-header">
                    <h1>회원가입완료</h1>
                </div>
                <div class="section-content">
                    <h2>회원가입이 완료되었습니다.<br>저희 쇼핑몰을 이용해주셔서 감사합니다.</h2>
                    <div class="member-info">
                        <p>
                            <img src="/assets/images/member/member_img01.jpg" alt="회원이미지">
                        </p>
                        <dl class="inline-dl">
                            <dt>아이디</dt>
                            <dd>freestyle</dd>
                            <dt>이름</dt>
                            <dd>홍길동</dd>
                            <dt>이메일</dt>
                            <dd>freestyle@naver.com</dd>
                        </dl>
                    </div>
                    <p>홍길동님은 <strong>일반회원</strong> 입니다.</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-green" role="button">로그인</a>
                            <a href="#" class="btn btn-gray" role="button">메인으로 이동</a>
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
