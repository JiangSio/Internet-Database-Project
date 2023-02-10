<?php

namespace frontend\models;

use frontend\models\Dead;
use frontend\models\XwNews;
use frontend\models\World;
$news = XwNews::find()->all();
$n1 = XwNews::findOne('1');
$d1=$n1->news_name;
$b1=$n1->news_web;

$n2 = XwNews::findOne('2');
$d2=$n2->news_name;
$b2=$n2->news_web;

$n3 = XwNews::findOne('3');
$d3=$n3->news_name;
$b3=$n3->news_web;

$n4 = XwNews::findOne('4');
$d4=$n4->news_name;
$b4=$n4->news_web;

$n5 = XwNews::findOne('5');
$d5=$n5->news_name;
$b5=$n5->news_web;

$n6 = XwNews::findOne('6');
$d6=$n6->news_name;
$b6=$n6->news_web;

$n7 = XwNews::findOne('7');
$d7=$n7->news_name;
$b7=$n7->news_web;

$n8 = XwNews::findOne('8');
$d8=$n8->news_name;
$b8=$n8->news_web;

$n9 = XwNews::findOne('9');
$d9=$n9->news_name;
$b9=$n9->news_web;

$a1 = World::findOne('1');
$c1 = $a1->w_time;
$w1 = $a1->w_name;

$a2 = World::findOne('2');
$c2 = $a2->w_time;
$w2 = $a2->w_name;

$a3 = World::findOne('3');
$c3 = $a3->w_time;
$w3 = $a3->w_name;

$a4 = World::findOne('4');
$c4 = $a4->w_time;
$w4 = $a4->w_name;

$a5 = World::findOne('5');
$c5 = $a5->w_time;
$w5 = $a5->w_name;

$a6 = World::findOne('6');
$c6=$a6->w_time;
$w6=$a6->w_name;

$a7 = World::findOne('7');
$c7=$a7->w_time;
$w7=$a7->w_name;

$a8 = World::findOne('8');
$c8=$a8->w_time;
$w8=$a8->w_name;

$a9 = World::findOne('9');
$c9=$a9->w_time;
$w9=$a9->w_name;

$a10 = World::findOne('10');
$c10=$a10->w_time;
$w10=$a10->w_name;

$a11 = World::findOne('11');
$c11=$a11->w_time;
$w11=$a11->w_name;

$a12 = World::findOne('12');
$c12=$a12->w_time;
$w12=$a12->w_name;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>俄乌战争 BY:YZH</title>
    <link rel="shortcut icon" href="project/lol.ico" type="image/x-icon">
    <script type="text/javascript" src="project/js/jquery.js"></script>
    <script type="text/javascript" src="project/js/echarts.min.js"></script>
    <script type="text/javascript" src="project/js/js.js"></script>
    <script type="text/javascript" src="project/js/jquery.liMarquee.js"></script>
    <script type="text/javascript" src="project/js/jquery.cxselect.min.js"></script>
    <link rel="stylesheet" href="project/css/comon0.css">
</head>

<body>
    <div style="background:#000d4a url(project/img/bg.png) center top;">
        <div class="loading">
            <div class="loadbox"> <img src="project/img/loading.gif"> 页面加载中... </div>
        </div>
        <div class="back"></div>
        <div class="head">
            <div class="JavaS"><a href="https://gitee.com/iGaoWei/big-data-view" target="_blank">YZH</a></div>
            <div class="weather"><span id="showTime"></span></div>
            <h1>俄乌战争</h1>


        </div>
        <script>
            var t = null;
            t = setTimeout(time, 1000); /*开始运行*/
            function time() {
                clearTimeout(t); /*清除定时器*/
                dt = new Date();
                var y = dt.getFullYear();
                var mt = dt.getMonth() + 1;
                var day = dt.getDate();
                var h = dt.getHours();
                var m = dt.getMinutes();
                var s = dt.getSeconds();
                document.getElementById("showTime").innerHTML = y + "年" + mt + "月" + day + "日" + h + "时" + m + "分" + s + "秒";
                t = setTimeout(time, 1000);
            }
        </script>
        <div class="mainbox">
            <ul class="clearfix">
                <li>
                    <div class="boxall" style="height:400px;">
                        <div class="alltitle">初步了解</div>
                        <p style="background-color:rgb(255,255,0)">
                            <a href=<?php echo $b1 ?>>
                                <h3><?php echo $d1; ?></h3>
                            </a>
                        </p>
                        <h2>——————— </h2>
                        <h4>俄罗斯阵亡总人数：</h4>
                        <h5>88880(截止2022年11月30日)</h5>
                        <h5>来源：乌克兰国防部</h5>
                        <h2>——————— </h2>
                        <h4>乌克兰阵亡总人数：</h4>
                        <h5>超100000(截止2022年12月1日)</h5>
                        <h5>来源：欧盟主席会</h5>
                         <div class="navboxall" id="echart5"></div>
                    </div>

                    <div class="boxall" style="height:520px;">
                        <div class="alltitle">新闻播报</div>
                        <div class="navboxall">
<!--                            <div class="wraptit">-->
<!--                                <span>英雄名</span><span>出场次数</span><span>Pick比率</span><span>胜率</span>-->
<!--                            </div>-->
                            <div class="wrap">
                                <ul>

                                    <div style="color::red"><h5 style="color:white">本版块包括来自国内外各个媒体的新闻观点</h5></div>

                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b2 ?>>
                                            <?php echo $d2; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b3 ?>>
                                            <?php echo $d3; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b4 ?>>
                                            <?php echo $d4; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b5 ?>>
                                            <?php echo $d5; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b6 ?>>
                                            <?php echo $d6; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b7 ?>>
                                            <?php echo $d7; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b8 ?>>
                                            <?php echo $d8; ?>
                                        </a>
                                    </p>
                                    <p style="background-color:rgb(255,255,0)">
                                        <a href=<?php echo $b9 ?>>
                                            <?php echo $d9; ?>
                                        </a>
                                    </p>

                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="navboxall" id="echart1"></div>

<!--                    <div class="boxall" style="height:0px;">-->
<!--<!--                        <div class="alltitle">2020LPL夏季赛总冠军</div>-->-->
<!--                        <div class="navboxall" id="echart1"></div>-->
<!--                    </div>-->
                </li>
                <li>

                    <div class="boxall" style="height:320px">
                        <div class="clearfix navboxall" style="height: 100%">

                            <div class="pulll_left zhibiao">
                                <div class="zb1"><span>坦克<br>损失数量</span>
                                    <div id="zb1"></div>
                                </div>
                                <div class="zb2"><span>步兵战车<br>损失数量</span>
                                    <div id="zb2"></div>
                                </div>
                                <div class="zb3"><span>装甲运兵车<br>损失数量</span>
                                    <div id="zb3"></div>
                                </div>
                            </div>
                            <div class="pulll_right zhibiao ">
                                <div class="zb4"><span>飞机<br>损失数量</span>
                                    <div id="zb4"></div>
                                </div>
                                <div class="zb5"><span>直升机<br>损失数量</span>
                                    <div id="zb5"></div>
                                </div>
                                <div class="zb6"><span>无人机<br>损失数量</span>
                                    <div id="zb6"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="boxall" style="height:600px">
                        <div class="alltitle">双方死亡人数</div>
                        <div class="navboxall" id="echart4"></div>
                    </div>

                    <div class="navboxall" id="echart3"></div>
                </li>
                <li>
                    <div class="boxall" style="height:600px">
                        <div class="alltitle">俄乌世界线</div>
                        <div class="navboxall">
                            <table class="table1" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th scope="col" class="toptop">时间</th>
                                        <th scope="col"></th>
                                        <th scope="col">事件</th>
                                        <th scope="col"></th>
                                    </tr>
                                    <tr>
                                        <td><span>1</span></td>
                                        <td><?php echo $c1; ?></td>
                                        <td><?php echo $w1; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>2</span></td>
                                        <td><?php echo $c2; ?></td>
                                        <td><?php echo $w2; ?></td>
                                    </tr>

                                    <tr>
                                        <td><span>3</span></td>
                                        <td><?php echo $c3; ?></td>
                                        <td><?php echo $w3; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>4</span></td>
                                        <td><?php echo $c4; ?></td>
                                        <td><?php echo $w4; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>5</span></td>
                                        <td><?php echo $c5; ?></td>
                                        <td><?php echo $w5; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>6</span></td>
                                        <td><?php echo $c6; ?></td>
                                        <td><?php echo $w6; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>7</span></td>
                                        <td><?php echo $c7; ?></td>
                                        <td><?php echo $w7; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>8</span></td>
                                        <td><?php echo $c8; ?></td>
                                        <td><?php echo $w8; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>9</span></td>
                                        <td><?php echo $c9; ?></td>
                                        <td><?php echo $w9; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>10</span></td>
                                        <td><?php echo $c10; ?></td>
                                        <td><?php echo $w10; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>11</span></td>
                                        <td><?php echo $c11; ?></td>
                                        <td><?php echo $w11; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>12</span></td>
                                        <td><?php echo $c12; ?></td>
                                        <td><?php echo $w12; ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="boxall" style="height: 300px">
                        <div class="alltitle">战争总括</div>
                        <div class="navboxall">
                            <table class="table1" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">三大阶段</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    <tr>
                                        <td><span>1</span></td>
                                        <td>第一阶段：入侵乌克兰（ 2022年2月24日 － 4月7日 ）</td>
                                    </tr>
                                    <tr>
                                        <td><span>2</span></td>
                                        <td>第二阶段：东南战线（4月8日－9月5日）</td>

                                    </tr>

                                    <tr>
                                        <td><span>3</span></td>
                                        <td>第三阶段：乌克兰反攻以及核危机（9月6日－至今）</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="navboxall" id="echart2"></div>

                </li>
            </ul>

        </div>
    </div>

    <script>
        $(function() {
            $('.wrap,.adduser').liMarquee({
                direction: 'up',
                /*向上滚动*/
                runshort: false,
                /*内容不足时不滚动*/
                scrollamount: 20 /*速度*/
            });
        });
    </script>




</body>

</html>