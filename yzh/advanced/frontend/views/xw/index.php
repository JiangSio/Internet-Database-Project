<?php

namespace frontend\models;

use frontend\models\Dead;
use frontend\models\News;
$news = News::find()->all();
$n1 = News::findOne('1');
$d1=$n1->news_name;
$b1=$n1->news_web;

$n2 = News::findOne('2');
$d2=$n2->news_name;
$b2=$n2->news_web;

$n3 = News::findOne('3');
$d3=$n3->news_name;
$b3=$n3->news_web;

$n4 = News::findOne('4');
$d4=$n4->news_name;
$b4=$n4->news_web;

$n5 = News::findOne('5');
$d5=$n5->news_name;
$b5=$n5->news_web;
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
            <a href="https://gitee.com/iGaoWei/big-data-view" target="_blank">
                <h1>俄乌战争</h1>
            </a>

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

                    <div class="boxall" style="height:230px">
                        <div class="clearfix navboxall" style="height: 100%">

                            <div class="pulll_left zhibiao">
                                <div class="zb1"><span>TES<br>胜率最高</span>
                                    <div id="zb1"></div>
                                </div>
                                <div class="zb2"><span>JDG<br>击杀最高</span>
                                    <div id="zb2"></div>
                                </div>
                                <div class="zb3"><span>SN<br>插眼最多</span>
                                    <div id="zb3"></div>
                                </div>
                            </div>
                            <div class="pulll_right zhibiao ">
                                <div class="zb4"><span>TESknight<br>击杀最多</span>
                                    <div id="zb4"></div>
                                </div>
                                <div class="zb5"><span>IGTheShy<br>死亡最多</span>
                                    <div id="zb5"></div>
                                </div>
                                <div class="zb6"><span>V5y4<br>KDA最高</span>
                                    <div id="zb6"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="boxall" style="height:350px">
                        <div class="alltitle">双方死亡人数</div>
                        <div class="navboxall" id="echart4"></div>
                    </div>

                    <div class="boxall" style="height:340px">
                        <div class="alltitle">个人击杀数据</div>
                        <div class="navboxall" id="echart3"></div>
                    </div>
                </li>
                <li>
                    <div class="boxall" style="height:300px">
                        <div class="alltitle">战队排行榜</div>
                        <div class="navboxall">
                            <table class="table1" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th scope="col" class="toptop">排名</th>
                                        <th scope="col">战队</th>
                                        <th scope="col">出场次数</th>
                                        <th scope="col">胜率</th>
                                    </tr>
                                    <tr>
                                        <td><span>1</span></td>
                                        <td>TES</td>
                                        <td>45<br></td>
                                        <td>73%<br></td>
                                    </tr>
                                    <tr>
                                        <td><span>2</span></td>
                                        <td>JDG</td>
                                        <td>48</td>
                                        <td>68%</td>
                                    </tr>

                                    <tr>
                                        <td><span>3</span></td>
                                        <td>V5</td>
                                        <td>49</td>
                                        <td>61%</td>
                                    </tr>
                                    <tr>
                                        <td><span>4</span></td>
                                        <td>IG</td>
                                        <td>44</td>
                                        <td>59%</td>
                                    </tr>
                                    <tr>
                                        <td><span>5</span></td>
                                        <td>SN</td>
                                        <td>52</td>
                                        <td>59%</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="boxall" style="height: 300px">
                        <div class="alltitle">个人排行榜</div>
                        <div class="navboxall">
                            <table class="table1" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th scope="col" class="toptop">排名</th>
                                        <th scope="col">队员</th>
                                        <th scope="col">位置</th>
                                        <th scope="col">总击杀</th>
                                    </tr>
                                    <tr>
                                        <td><span>1</span></td>
                                        <td>TESknight</td>
                                        <td>中单<br></td>
                                        <td>239<br></td>
                                    </tr>
                                    <tr>
                                        <td><span>2</span></td>
                                        <td>WEJiumeng</td>
                                        <td>ADC</td>
                                        <td>205</td>
                                    </tr>

                                    <tr>
                                        <td><span>3</span></td>
                                        <td>TESJackeyLove</td>
                                        <td>ADC</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td><span>4</span></td>
                                        <td>JDGLokeN</td>
                                        <td>ADC</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td><span>5</span></td>
                                        <td>LGDxiye</td>
                                        <td>中单</td>
                                        <td>191</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="boxall" style="height:320px">
                        <div class="alltitle">MVP种子选手</div>
                        <div class="navboxall" id="echart2"></div>
                    </div>


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