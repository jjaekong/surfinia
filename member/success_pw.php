<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member success-pw">
        <div class="container">
            <section class="success">
                <div class="section-header">
                    <h1>비밀번호찾기</h1>
                </div>
                <div class="section-content">
                    <h2>비밀번호가 고객님 메일로 발송되었습니다<br><small>저희 쇼핑몰을 이용해주셔서 감사합니다.</small></h2>
                    <div class="member-info">
                        <p>
                            <img src="/assets/images/member/member_img01.jpg" alt="회원이미지">
                        </p>
                        <dl class="inline-dl">
                            <dt>test</dt>
                            <dd>회원님의 패스워드를</dd>
                            <dt>test@test.com</dt>
                            <dd>으로 보내드렸습니다.</dd>
                            <dd>고객님 즐거운 쇼핑 하세요!</dd>
                        </dl>
                    </div>
                    <p>
                        고객님의 비밀번호가 성공적으로 발송되었습니다. 항상 고객님의<br>
                        즐겁고 편리한 쇼핑을 위해 최선의 노력을 다하는 쇼핑몰이 되도록 하겠습니다.
                    </p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-green" role="button">로그인</a>
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
