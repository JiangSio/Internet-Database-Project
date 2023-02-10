<!DOCTYPE html>
<html>
<head>
    <title>俄乌战争新闻速览</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./css/images/favicon.ico" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="all" type="text/css" />
    <link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http//fonts.googleapis.com/css?family=Bitter:400italic|Exo:400,800" media="all" type="text/css" />
    <link rel="stylesheet" href="./css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" type="text/css" />
    <link rel="stylesheet" href="./css/responsive.css" type="text/css" media="all" type="text/css" />

    <!-- Customization CSS - Edit this file to change the look & feel -->
    <link rel="stylesheet" href="./css/customize.css" type="text/css" media="all" type="text/css" />

    <!-- Modernizr, for IE compatibility -->
    <script src="./js/modernizr.js" type="text/javascript"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<section class="top-image" style="background:url('css/images/1.jpg') no-repeat top center;">
    <h1>俄乌战争最新局势报道</h1>
</section>

<section id="bottom">
    <section class="shell">

        <section id="content" class="two_third">

            <h1> <?php echo $title[0]['title']; ?></h1>
            <p> <?php echo $text[0]['text']; ?></p>

            <div class="comments">

                <h4>评论</h4>

                <div class="one_fifth">
                    <img src="./css/images/trainer1.jpg" width="100%" />
                </div>

                <div class="four_fifth last">

                    <p><strong>来自<?php echo $name[0]['name']; ?>的评论：</strong><br />
                        <?php echo $content[0]['content']; ?>
                        </p>

                    <h6>发表于<?php echo $time[0]['time']; ?></h6>

                </div>

                <div class="cl"></div>

                <div class="one_fifth">
                    <img src="./css/images/trainer4.jpg" width="100%" />
                </div>

                <div class="four_fifth last">

                    <p><strong>来自<?php echo $name[1]['name']; ?>的评论：</strong><br />
                        <?php echo $content[1]['content']; ?>
                    </p>

                    <h6>发表于<?php echo $time[1]['time']; ?></h6>

                </div>

                <div class="cl"></div>

                <div class="one_fifth">
                    <img src="./css/images/trainer2.jpg" width="100%" />
                </div>

                <div class="four_fifth last">

                    <p><strong>来自<?php echo $name[2]['name']; ?>的评论：</strong><br />
                        <?php echo $content[2]['content']; ?>
                    </p>

                    <h6>发表于<?php echo $time[2]['time']; ?></h6>

                </div>

                <div class="cl"></div>

                <div class="one_fifth">
                    <img src="./css/images/trainer3.jpg" width="100%" />
                </div>

                <div class="four_fifth last">

                    <p><strong>来自<?php echo $name[3]['name']; ?>的评论：</strong><br />
                        <?php echo $content[3]['content']; ?>
                    </p>

                    <h6>发表于<?php echo $time[3]['time']; ?></h6>

                </div>

                <div class="cl"></div>



            </div>

        </section>

        <aside class="one_third last">
            <ul class="widgets">
                <li class="upcoming-widget">
                    <h4>实时热搜榜</h4>

                    <section class="container">
                        <ul class="slides">
                            <li><a href="./index.php?r=article/index1#"><span class="icon"><img src="./css/images/hot.png" alt="" /></span> <strong>1.<?php echo $bestArticle[0]['title'] ?></strong></a></li>
                            <span class="right">阅读人数：<?php echo $readNumber[0]['number']?>人</span><br>
                            <li><a href="./index.php?r=article/index7#"><span class="icon"><img src="./css/images/hot.png" alt="" /></span>  <strong>2.<?php echo $bestArticle[1]['title'] ?></strong></a></li>
                            <span class="right">阅读人数：<?php echo $readNumber[1]['number']?>人</span><br>
                            <li><a href="./index.php?r=article/index12#"><span class="icon"><img src="./css/images/hot.png" alt="" /></span>  <strong>3.<?php echo $bestArticle[2]['title'] ?></strong></a></li>
                            <span class="right">阅读人数：<?php echo $readNumber[2]['number']?>人</span><br>
                            <li><a href="./index.php?r=article/index15#"><span class="icon"><img src="./css/images/hot.png" alt="" /></span>  <strong>4.<?php echo $bestArticle[3]['title'] ?></strong></a></li>
                            <span class="right">阅读人数：<?php echo $readNumber[3]['number']?>人</span><br>
                            <li><a href="./index.php?r=article/index17#"><span class="icon"><img src="./css/images/hot.png" alt="" /></span>  <strong>5.<?php echo $bestArticle[4]['title'] ?></strong></a></li>
                            <span class="right">阅读人数：<?php echo $readNumber[4]['number']?>人</span><br>
                        </ul>
                    </section>
                </li>

            </ul>
        </aside>
    </section>
</section>
</body>
</html>