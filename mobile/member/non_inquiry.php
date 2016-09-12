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
                        <li>
                            <a href="#">로그인</a>
                        </li>
                        <li class="active">
                            <a href="#">비회원 로그인</a>
                        </li>
                    </ul>
                </nav>
                <div class="login-form">
                    <input type="text" class="form-control" id="user-name" placeholder="ID 입력">
                    <label for="user-id" class="sr-only">이름</label>
                    <input type="text" class="form-control" id="order-num" placeholder="주문번">
                    <label for="order-num" class="sr-only">비회원 주문번호</label>
                    <input type="text" class="form-control" id="nonmember-pw" placeholder="비밀번호 입력">
                    <label for="nonmember-pw" class="sr-only">비회원 비밀번호</label>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-green" role="button">비회원 주문조회</a>
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
