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
        <article class="id-success">
            <div class="container">
                <p class="title">고객님의 아이디 찾기가 완료 되었습니다</p>
                <p class="success-txt">
                    저희 쇼핑몰을 이용해주셔서 감사합니다.<br>
                    다음정보로 가입된 아이디가 총 1개 있습니다.
                </p>
                <div class="success">
                    <dl>
                        <dt>아이디</dt>
                        <dd>freestyleday</dd>
                        <dt>이름</dt>
                        <dd>김관수</dd>
                        <dt>이메일</dt>
                        <dd>freestyleday@naver.com</dd>
                    </dl>
                </div>
                <p class="last-txt">
                    고객님의 아이디 찾기가 성공적으로 이루어졌습니다.<br>
                    항상 고객님의 즐겁고 편리한 쇼핑을 위해 최선의<br>
                    노력을 다하는 쇼핑몰이 되도록 하겠습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-green" role="button">로그인</a>
                        <a href="#" class="btn btn-sm btn-gray" role="button">메인으로 이동</a>
                    </p>
                </div>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
