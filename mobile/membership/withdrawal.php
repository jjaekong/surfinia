<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/membership.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content membership">
        <div class="page-header">
            <div class="section-header">
                <h2>회원탈퇴</h2>
            </div>
        </div>
        <div class="container">
            <article class="withdrawal">
                <div class="login-form">
                    <form>
                        <p class="tlogin-txt">
                            회원 가입시 작성하셨던 정보를 입력해주세요.<br>
                            회원탈퇴 버튼을 누르시면 회원탈퇴가 완료됩니다
                        </p>
                        <input type="text" class="form-control" id="user-id" placeholder="아이디">
                        <label for="user-id" class="sr-only">아이디</label>
                        <input type="text" class="form-control" id="user-pw" placeholder="비밀번호">
                        <label for="user-pw" class="sr-only">비밀번호</label>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-green" role="button">회원탈퇴</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="attention">
                    <h3>즉시 재가입 가능</h3>
                    <p>회원탈퇴를 신청하면, 해당 아이디는 즉시탈퇴 처리되며, 이후 바로같은 아이디로 가입 할 수 없게 됩니다.</p>
                    <h3>회원 정보 및 서비스 정보 삭제</h3>
                    <p>회원탈퇴 즉시 회원정보는 즉시삭제되며 아래 회원제 서비스의 정보도 삭제 됩니다.</p>
                    <ul>
                        <li>
                            <dl>
                                <dt>기본 회원정보</dt>
                                <dd>DB에 저장되어있는 기본 회원정보(이름/주소/전화번호등)가 삭제됩니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>결제내역 삭제</dt>
                                <dd>기존에 결제한 서비스가 모두 삭제 됩니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>게시물 및 등록 자료 삭제</dt>
                                <dd>등록한 게시판의 게시물 및 덧글등이 삭제됩니다.</dd>
                            </dl>
                        </li>
                    </ul>
                    <h3>회원 탈퇴에 따른 이용내역 삭제</h3>
                    <p>회원탈퇴를 신청하면, 모든 이용내역이 삭제되어 복구가 불가능 하게 됩니다.</p>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
