<?php

/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is price analysis view
 */
use frontend\models\SjfxPetrolprice;
use frontend\models\SjfxGasprice;

?>

<!doctype html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>俄乌战争能源价格之争</title>
    
    <script type="text/javascript" src="sjfx/js/jquery.js"></script>
    <script type="text/javascript" src="sjfx/js/echarts.min.js"></script>
    <script type="text/javascript" src="sjfx/js/jquery.liMarquee.js"></script>
    <script type="text/javascript" src="sjfx/js/jquery.cxselect.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sjfx/css/comon0.css">
    
</head>

<body>
    <div style="background:#ffe center top;">
        <div class="loading">
            <div class="loadbox"><img src="sjfx/img/loading.gif">页面加载中...</div>
        </div>
        <div class="back"></div>
        <div class="head">
            <div class="weather"><span id="showTime"></span></div>
            <h1>俄乌战争能源价格之争</h1>
        </div>
        <script>
            var t = null;
            t = setTimeout(time, 1000); /*開始运行*/
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
        <h2> </h2>
        <h2>_____________________________________________________________</h2>
        <h2></h2>
        <h5>一直以来，俄罗斯和乌克兰是世界重要的能源出口国，主要以原油和天然气为主，是全球重要的原油和天然气的生产和出口国家</h5>
        <h5>俄罗斯与美国和沙特阿拉伯位列世界前三</h5>
        <h5>基于当前市场分布格局，俄乌冲突导致能源供给出现缺口，这势必会对全球能源市场造成重大的影响</h5>
        <h5>由于俄乌冲突形式严峻，会直接导致全球能源市场供给受阻，从而使全球通胀超过预期水平</h5>
        <h5>高通胀状态会带来更快的经济周期速度，造成全球能源市场衰退</h5>
        <h5>----------------</h5>
        <h5>随着俄乌两国战争的持续爆发，俄罗斯的能源供应变化对全球市场产生严重影响</h5>
        <h5>同时由于美国和欧盟对俄罗斯实施制裁，俄罗斯能源出口受阻</h5>
        <h5>这会直接导致全球原油和天然气价格继续上涨</h5>
        <h5>在地缘政治的背景下，预计短期能源价格将会持续升高</h5>
        <h2> </h2>
        <h2>______________________________________________________________</h2>
        
            <ul class="clearfix">
                <li>
                    <div class="boxall" style="height:460px;">
                        <div class="alltitle">事件进程</div>
                        <div class="navboxall">
                            <div class="wraptit"><span>日期</span><span>事件</span></div>
                            <div class="wrap">
                                <ul>
                                    <?php
                                    foreach ($events as $event){
                                        echo '<li>
                                        <p><span>'.$event->date.'</span><span>'.$event->event.'</span></p>
                                    </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="boxall" style="height:260px;">
                        <div class="alltitle">标题样式3</div>
                        <div class="navboxall" id="echart1"></div>
                    </div> -->
                </li>
                <li>
                    <div class="boxall" style="height:460px">
                        <div class="clearfix navboxall" style="height: 100%">
                            <div class="pulll_left num">
                                
                                <div class="numbt">汽油<span>(单位：元/吨)</span></div>
                                <div class="numtxt"><?php echo $newpetrol->petrol_price;?></div>
                                <div class="numbt">柴油<span>(单位：元/吨)</span></div>
                                <div class="numtxt"><?php echo $newpetrol->diesel_price;?></div>

                            </div>
                            <div class="pulll_right zhibiao">
                                <div>
                                    <span>天然气价格</span>
                                        <table class="table table-bordered" id="gas-table" style="color:black">
                                            <thead>
                                              <tr>
                                                <th>产品</th>
                                                <th>价格</th>
                                                <th>产地</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $length = count($newproduct);
                                            for($x=0;$x<$length;$x++){
                                                if($newproduct[$x]->date>'2023-01-01'){
                                                    echo '<tr>
                                                    <td>'.$newproduct[$x]->product.'</td>
                                                    <td>'.$newproduct[$x]->price.'</td>
                                                    <td>'.$newproduct[$x]->origin.'</td>
                                                    </tr>';
                                                }
                                                
                                            }
                                            ?>
                                            </tbody>
                                          </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    
                    
                    <!-- <div class="boxall" style="height:320px">
                        <div class="alltitle">标题样式11</div>
                        <div class="navboxall" id="echart2"></div>
                    </div> -->
                </li>
            </ul>
            <div class="boxall" style="height:350px">
                <div class="alltitle">油价分析</div>
                <div class="navboxall" id="echart4"></div>
            </div>
            <div class="boxall" style="height:400px">
                <div class="alltitle">气价分析</div>
                <div class="navboxall" id="echart3"></div>
            </div>
        </div>
    </div>

<script>
        $(function() {
            $('.wrap,.adduser').liMarquee({
                direction: 'up',
                /*身上滚动*/ runshort: false,
                /*内容不足时不滚动*/ scrollamount: 20 /*速度*/
            });
        });

$(window).load(function() {
$(".loading").fadeOut()
});
$(function() {
    //i();
    //j();
    k();
    l();
    //m();
    //n();
    //o();
    //p();

    function k() {
        var a = echarts.init(document.getElementById("echart3"));
        option = {
            dataZoom : [
                {
                  type: 'slider',
                  show: true,
                  start: 0,
                  height:20,
                  end: 50,
                  xAxisIndex: [0],
                },
              ],
            tooltip: {
                trigger: "axis",
                axisPointer: {
                    lineStyle: {
                        color: "#57617B"
                    }
                }
            },
            legend: {
                data: ["内蒙时泰", "内蒙森泰","内蒙汇能","升达子州","宁夏宏兴","星星能源","众源绿能","达州汇鑫能源","任丘华港"],
                top: "0",
                textStyle: {
                    color: "#555"
                },
                itemGap: 20,
            },
            grid: {
                left: "0",
                right: "20",
                top: "10",
                bottom: "20",
                containLabel: true
            },
            xAxis: [{
                type: "category",
                boundaryGap: false,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: "rgba(10,10,10,.6)"
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.1)"
                    }
                },
                data: [<?php
                $query2=SjfxGasprice::find();
                $gasprice=$query2->orderBy('date')->all();
                $str = '';
                $datenow="";
                foreach($gasprice as $gas){
                    if($datenow!=$gas->date){
                        $str = $str."\"".$gas->date."\",";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            }, {}],
            yAxis: [{
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: "rgba(10,10,10,.6)"
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.1)"
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.1)"
                    }
                }
            }],
            series: [{
                name: "内蒙时泰",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(24, 163, 64, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(24, 163, 64, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#cdba00",
                        borderColor: "rgba(137,189,2,0.27)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="内蒙时泰"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            }, {
                name: "内蒙森泰",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#277ace",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="内蒙森泰"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "达州汇鑫能源",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#108563",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="达州汇鑫能源"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "星星能源",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#438598",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="星星能源"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "宁夏宏兴",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#076849",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="宁夏宏兴"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "升达子州",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#548293",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="升达子州"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "众源绿能",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#975689",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="众源绿能"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },{
                name: "内蒙汇能",
                type: "line",
                smooth: true,
                symbol: "circle",
                symbolSize: 5,
                showSymbol: false,
                lineStyle: {
                    normal: {
                        width: 2
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: "rgba(39, 122,206, 0.3)"
                        }, {
                            offset: 0.8,
                            color: "rgba(39, 122,206, 0)"
                        }], false),
                        shadowColor: "rgba(0, 0, 0, 0.1)",
                        shadowBlur: 10
                    }
                },
                itemStyle: {
                    normal: {
                        color: "#323469",
                        borderColor: "rgba(0,136,212,0.2)",
                        borderWidth: 12
                    }
                },
                data: [<?php
                $str = '';
                foreach($gasprice as $gas){
                    if($gas->product=="内蒙汇能"){
                        $str = $str."[\"".$gas->date."\",".$gas->price."],";
                        $datenow=$gas->date;
                    }
                }
                echo $str;
                ?>]
            },],
        };
        a.setOption(option);
        window.addEventListener("resize", function() {
            a.resize()
        })
        
    }

    function l() {
        var a = echarts.init(document.getElementById("echart4"));
        option = {
            dataZoom : [
                {
                  type: 'slider',
                  show: true,
                  height:20,
                  start: 0,
                  end: 50,
                  xAxisIndex: [0],
                },
              ],
            tooltip: {
                trigger: "axis",
                axisPointer: {
                    lineStyle: {
                        color: "#57617B"
                    }
                }
            },
            legend: {
                data: [{
                    name: "汽油"
                }, {
                    name: "柴油"
                }, {
                    name: "汽油涨跌"
                }, {
                    name: "柴油涨跌"
                }],
                top: "0%",
                textStyle: {
                    color: "rgba(10,10,10,0.9)"
                }
            },
            xAxis: [{
                type: "category",
                data: [
                <?php
                $query1=SjfxPetrolprice::find();
                $petrolprice=$query1->orderBy('date')->all();
                $str = '';
                foreach($petrolprice as $petrol){
                    $str = $str."\"".$petrol->date."\",";
                }
                echo $str;
                ?>],
                axisLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.1)"
                    }
                },
                axisLabel: {
                    textStyle: {
                        color: "rgba(10,10,10,.6)",
                        fontSize: "14",
                    },
                },
            }, ],
            yAxis: [{
                type: "value",
                name: "金额/千元",
                min: 5,
                max: 10,
                interval: 1,
                axisLabel: {
                    show: true,
                },
                axisLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.4)"
                    }
                },
            }, {
                type: "value",
                name: "涨幅/千元",
                show: true,
                min: -1,
                max: 1,
                axisLabel: {
                    show: true,
                },
                axisLine: {
                    lineStyle: {
                        color: "rgba(10,10,10,.4)"
                    }
                },
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: "#001e94"
                    }
                },
            }, ],
            grid: {
                top: "10%",
                right: "30",
                bottom: "30",
                left: "30",
            },
            series: [{
                name: "汽油价格",
                type: "bar",
                data: [<?php
                $query1=SjfxPetrolprice::find();
                $petrolprice=$query1->orderBy('date')->all();
                $str = '';
                foreach($petrolprice as $petrol){
                    $str = $str."\"".($petrol->petrol_price/1000)."\",";
                }
                echo $str;
                ?>],
                barWidth: "auto",
                itemStyle: {
                    normal: {
                        color: {
                            type: "linear",
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: "#609db8"
                            }, {
                                offset: 1,
                                color: "#609db8"
                            }],
                            globalCoord: false
                        }
                    }
                }
            }, {
                name: "柴油价格",
                type: "bar",
                data: [<?php
                $query1=SjfxPetrolprice::find();
                $petrolprice=$query1->orderBy('date')->all();
                $str = '';
                foreach($petrolprice as $petrol){
                    $str = $str."\"".($petrol->diesel_price/1000)."\",";
                }
                echo $str;
                ?>],
                barWidth: "auto",
                itemStyle: {
                    normal: {
                        color: {
                            type: "linear",
                            x: 0,
                            y: 0,
                            x2: 0,
                            y2: 1,
                            colorStops: [{
                                offset: 0,
                                color: "#66b8a7"
                            }, {
                                offset: 1,
                                color: "#66b8a7"
                            }],
                            globalCoord: false
                        }
                    }
                },
                barGap: "0"
            }, {
                name: "汽油涨幅",
                type: "line",
                yAxisIndex: 1,
                data: [<?php
                $query1=SjfxPetrolprice::find();
                $petrolprice=$query1->orderBy('date')->all();
                $str = '';
                foreach($petrolprice as $petrol){
                    $str = $str."\"".($petrol->petrol_vary/1000)."\",";
                }
                echo $str;
                ?>],
                lineStyle: {
                    normal: {
                        width: 2
                    },
                },
                itemStyle: {
                    normal: {
                        color: "#cdba00",
                    }
                },
                smooth: true
            },{
                name: "柴油涨幅",
                type: "line",
                yAxisIndex: 1,
                data: [<?php
                $query1=SjfxPetrolprice::find();
                $petrolprice=$query1->orderBy('date')->all();
                $str = '';
                foreach($petrolprice as $petrol){
                    $str = $str."\"".($petrol->diesel_vary/1000)."\",";
                }
                echo $str;
                ?>],
                lineStyle: {
                    normal: {
                        width: 2
                    },
                },
                itemStyle: {
                    normal: {
                        color: "#657892",
                    }
                },
                smooth: true
            }]
        };
        a.setOption(option);
        window.addEventListener("resize", function() {
            a.resize()
        })
        
    }
});
    </script>
</body>


</html>

