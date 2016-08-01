<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community confirm-pw">
        <div class="container">
            <section class="confirm">
                <div class="section-header">
                    <h1>상품후기</h1>
                </div>
                <div class="section-content">
                    <div class="lock-pw">
                       <h2>비밀번호를 입력해주세요</h2>
                       <p>게시글 작성시 입력하셨던 비밀번호를 입력해주세요</p>
                       <form>
                           <label for="user-pw" class="sr-only">비밀번호</label>
                           <input type="password" id="user-pw">
                           <div class="btn-area">
                               <p>
                                   <button type="submit" class="btn btn-green">확인</button>
                               </p>
                           </div>
                       </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
