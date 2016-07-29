<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="community event">
        <div class="container">
            <section class="event-info">
                <div class="section-header">
                    <h1>이벤트</h1>
                </div>
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active">
                        <a href="#">진행중인 이벤트</a>
                    </li>
                    <li role="presentation">
                        <a href="#">종료된 이벤트</a>
                    </li>
                    <li role="presentation">
                        <a href="#">당첨자 발표</a>
                    </li>
                </ul>
                <div class="event-content">
                    <div class="search-form">
                        <form>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="#">제목</option>
                                    <option value="#">제목2</option>
                                </select>
                                <label for="search-keyword" class="sr-only">검색어</label>
                                <input id="search-keyword" type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn">검색</button>
                        </form>
                    </div>
                    <ul class="event-list">
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img01.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img02.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img03.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img01.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img02.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>
                                    <img src="/assets/images/community/event_img01.jpg" alt="진행중인이벤트">
                                </p>
                                <h5>네이버블로그 이웃맺기 이벤트</h5>
                                <p class="date">2016-07-05</p>
                            </a>
                        </li>
                    </ul>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#">&laquo;</a>
                            </li>
                            <li>
                                <a href="#">&lsaquo;</a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#">&rsaquo;</a>
                            </li>
                            <li>
                                <a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
