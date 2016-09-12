<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="content community">
        <div class="page-header">
            <div class="section-header">
                <h2>EVENT</h2>
            </div>
        </div>
        <div class="container">
            <article class="event-common event">
                <nav class="menu-list">
                    <ul>
                        <li class="active">
                            <a href="#">진행중인 이벤트</a>
                        </li>
                        <li>
                            <a href="#">종료된 이벤트</a>
                        </li>
                        <li>
                            <a href="#">당첨자 발표</a>
                        </li>
                    </ul>
                </nav>
                <div class="search-form">
                    <form>
                        <div class="search">
                            <select class="form-control">
                                <option value="">전체</option>
                                <option value="">이름</option>
                                <option value="">제목</option>
                            </select>
                            <input type="text" id="search" class="form-control">
                            <p class="search-btn">
                                <a href="#" class="btn" role="button">검색</a>
                            </p>
                        </div>
                    </form>
                </div>
                <ul class="row event-list">
                    <li class="col-xs-6 col-sm-3">
                        <p class="event-img">
                            <a href="#">
                                <img src="/mobile/images/community/event_img01.jpg" alt="이벤트 이미지">
                            </a>
                        </p>
                        <div class="event-info">
                            <a href="#">
                                <h3>네이버 블로그<br>이웃맺기</h3>
                                <p class="date">2016. 04. 03</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <p class="event-img">
                            <a href="#">
                                <img src="/mobile/images/community/event_img02.jpg" alt="이벤트 이미지">
                            </a>
                        </p>
                        <div class="event-info">
                            <a href="#">
                                <h3>카카오페이 런칭<br>기념이벤트</h3>
                                <p class="date">2016. 04. 03</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <p class="event-img">
                            <a href="#">
                                <img src="/mobile/images/community/event_img01.jpg" alt="이벤트 이미지">
                            </a>
                        </p>
                        <div class="event-info">
                            <a href="#">
                                <h3>네이버 블로그<br>이웃맺기</h3>
                                <p class="date">2016. 04. 03</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-sm-3">
                        <p class="event-img">
                            <a href="#">
                                <img src="/mobile/images/community/event_img02.jpg" alt="이벤트 이미지">
                            </a>
                        </p>
                        <div class="event-info">
                            <a href="#">
                                <h3>카카오페이 런칭<br>기념이벤트</h3>
                                <p class="date">2016. 04. 03</p>
                            </a>
                        </div>
                    </li>
                </ul>
                <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
