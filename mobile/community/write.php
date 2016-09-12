<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content community">
        <div class="page-header">
            <div class="section-header">
                <h2>상품후기</h2>
            </div>
        </div>
        <div class="container">
            <article class="write">
                <form>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="subject">제목</label></th>
                                    <td>
                                        <input type="text" class="form-control" id="subject">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="user-pw">비밀번호</label></th>
                                    <td>
                                        <input type="password" class="form-control" id="user-pw">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="content">상품평</label></th>
                                    <td>
                                        <textarea id="content"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="file">사진첨부</label></th>
                                    <td>
                                        <input type="file" class="form-control" id="file">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-green" role="button">등록</a>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                        </p>
                    </div>
                </form>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
