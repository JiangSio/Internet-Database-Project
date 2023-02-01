<?php

/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is port analysis view
 */
use frontend\models\SjfxImportexport;
$query=SjfxImportexport::find();
$datas=$query->orderBy('month')->all();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="sjfx/js/jquery.js"></script>
<script type="text/javascript" src="sjfx/js/echarts.min.js"></script>
<script type="text/javascript" src="sjfx/js/jquery.liMarquee.js"></script>
<script type="text/javascript" src="sjfx/js/jquery.cxselect.min.js"></script>
<link rel="stylesheet" href="sjfx/css/comon1.css">
</head>
<body>
<div style="background:#ffe center top;">
  <div class="loading">
    <div class="loadbox"> <img src="sjfx/img/loading.gif"> 页面加载中... </div>
  </div>
  <div class="back"></div>
  <div class="head">
    <h1>俄乌战争对中国外贸的影响</h1>
    <div class="weather"><span id="showTime"></span></div>
	    </div>
    <script>
var t = null;
    t = setTimeout(time,1000);//開始运行
    function time()
    {
       clearTimeout(t);//清除定时器
       dt = new Date();
		var y=dt.getFullYear();
		var mt=dt.getMonth()+1;
		var day=dt.getDate();
       var h=dt.getHours();//获取时
       var m=dt.getMinutes();//获取分
       var s=dt.getSeconds();//获取秒
       document.getElementById("showTime").innerHTML = y+"年"+mt+"月"+day+"日"+h+"时"+m+"分"+s+"秒";
       t = setTimeout(time,1000); //设定定时器，循环运行
    }
</script>
  <div class="mainbox">

  <h2> </h2>
    <h2>_____________________________________________________________</h2>
    <h2></h2>
    <h5>两国开战，世界局势发生动荡，由此引发的连锁效应也迅速波及到了各个行业</h5>
    <h5>乌克兰因为国内的战乱，社会正常秩序无法维持，当地居民开始抢物资，导致物价极速上涨</h5>
    <h5>也因战乱，乌克兰的外贸行业几乎已经陷入停摆状态，所有的海外航船都不敢靠港，引发物资短缺的恶性循环</h5>
    <h5>再加上此前乌克兰的资本大量出逃，其国内的经济市场更是脆弱得不堪一击</h5>
    <h5>----------------</h5>
    <h5>不仅乌克兰，因为发动战争，俄罗斯国内的经济发展也受到重创，俄罗斯RTS指数跌逾40%，莫斯科交易所暂停交易</h5>
    <h5>随后欧盟和美国冻结了俄罗斯在其境内的所有资产，部分欧美国家也决定开始对俄进行金融制裁</h5>
    <h5>因为受到波及，亚太股市和欧美股市同样是一路狂泻，全线看跌</h5>
    <h5>我国是乌克兰最大的贸易伙伴国，俄罗斯也是中国重要的贸易合作伙伴，俄乌战争使得局势不明朗起来</h5>
    <h2> </h2>
    <h2>______________________________________________________________</h2>
    <ul class="clearfix">
      <li>
        <div class="boxall" style="height:2000px;">
            <div class="alltitle">局势通报</div>
            <div class="navboxall" >
              <div class="wraptit"><span>时间</span><span>事件</span></div>
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
      </li>
      <li>
        <div class="boxall" style="height:400px">
          <div class="alltitle">俄罗斯对中国进出口量</div>
          <div class="navboxall" id="echart4"></div>
        </div>
      </li>
      <li>
        <div class="boxall" style="height:270px">
          <div class="alltitle">俄罗斯对中国进口量</div>
          <div class="navboxall" id="echart1"> </div>
        </div>
    </li>
    <li>
        <div class="boxall" style="height:270px">
          <div class="alltitle">俄罗斯对中国出口量</div>
          <div class="navboxall"  id="echart2"> </div>
        </div>
      </li>
      <li style="width:70%">
        <div class="boxall" style="height:350px">
          <div class="alltitle">俄罗斯对中国进出口量趋势</div>
          <div class="navboxall" id="echart5"></div>
        </div>
      </li>
      <li>
        <div class="boxall" style="height:400px">
          <div class="alltitle">乌克兰对中国进出口量</div>
          <div class="navboxall" id="echart7"></div>
        </div>
      </li>
      <li>
        <div class="boxall" style="height:270px">
          <div class="alltitle">乌克兰对中国进口量</div>
          <div class="navboxall" id="echart8"> </div>
        </div>
        </li>
        <li>
        <div class="boxall" style="height:270px">
          <div class="alltitle">乌克兰对中国出口量</div>
          <div class="navboxall"  id="echart9"> </div>
        </div>
      </li>
      <li style="width:70%">
        <div class="boxall" style="height:350px">
          <div class="alltitle">乌克兰对中国进出口量趋势</div>
          <div class="navboxall" id="echart10"></div>
        </div>
      </li>
    </ul>
    
  </div>
</div>

<script>

$(function(){
	$('.wrap').liMarquee({
		direction: 'up',//身上滚动
		runshort: false,//内容不足时不滚动
		scrollamount: 20//速度
	});
});




$(window).load(function(){$(".loading").fadeOut()})  
$(function () {
    echarts_1();
	echarts_2();
	echarts_4();
	echarts_5();
    
    echarts_7();
    echarts_8();
    echarts_9();
    echarts_10();




function echarts_1() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart1'));
        option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{b} : {c} ({d}%)"
                    },
                    legend: {
                        right:10,
                        top:30,
                        height:140,
                        itemWidth:10,
                        itemHeight:10,
                        itemGap:10,
                        textStyle:{
                            color: 'rgba(0,0,0,.6)',
                            fontSize:12
                        },
                        orient:'vertical',
                        data:['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
                    },
                   calculable : true,
                    series : [
                        {
                            name:'进口量',
							color: ['#62c98d', '#2f89cf', '#4cb9cf', '#53b666', '#62c98d', '#205acf', '#c9c862', '#c98b62', '#c962b9', '#7562c9','#c96262','#a6a783'],	
                            type:'pie',
                            radius : [30, 70],
                            center : ['35%', '50%'],
                            roseType : 'radius',
                            label: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            lableLine: {
                                normal: {
                                    show: false
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            data:[
                                <?php
                                $str = '';
                                foreach($datas as $data){
                                    if($data->country=="俄罗斯联邦"){
                                        $str = $str.'{value:'.$data->in_m.",name:\"".$data->month."月\"},";
                                    }
                                }
                                echo $str;
                                ?>
                            ]
                        },
                    ]
                };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }
function echarts_2() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart2'));

        option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{b} : {c} ({d}%)"
                    },
                    legend: {
                        right:10,
                        top:30,
                        height:140,
                        itemWidth:10,
                        itemHeight:10,
                        itemGap:10,
                        textStyle:{
                            color: 'rgba(0,0,0,.6)',
                            fontSize:12
                        },
                        orient:'vertical',
                        data:['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
                    },
                   calculable : true,
                    series : [
                        {
                            name:'出口量',
							color: ['#62c98d', '#2f89cf', '#4cb9cf', '#53b666', '#62c98d', '#205acf', '#c9c862', '#c98b62', '#c962b9', '#7562c9','#c96262','#a6a783'],	
                            type:'pie',
                            radius : [30, 70],
                            center : ['35%', '50%'],
                            roseType : 'radius',
                            label: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            lableLine: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            data:[
                                <?php
                                $str = '';
                                foreach($datas as $data){
                                    if($data->country=="俄罗斯联邦"){
                                        $str = $str.'{value:'.$data->ex_m.",name:\"".$data->month."月\"},";
                                    }
                                }
                                echo $str;
                                ?>
                            ]
                        },
                    ]
                };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }

function echarts_4() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart4'));
option = {
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['进口量', '出口量'],
        align: 'right',
        right: '40%',
		top:'0%',
        textStyle: {
            color: "#fff",
		    fontSize: '16',

        },
        itemWidth: 16,
        itemHeight: 16,
        itemGap: 35
    },
    grid: {
        left: '0%',
		top:'40px',
        right: '0%',
        bottom: '2%',
       containLabel: true
    },
    xAxis: [{
        type: 'category',
      		data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        axisLine: {
            show: true,
         lineStyle: {
                color: "rgba(0,0,0,.1)",
                width: 1,
                type: "solid"
            },
        },
		
        axisTick: {
            show: false,
        },
		axisLabel:  {
                interval: 0,
               // rotate:50,
                show: true,
                splitNumber: 15,
                textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
            },
    }],
    yAxis: [{
        type: 'value',
        axisLabel: {
           //formatter: '{value} %'
			show:true,
			 textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
        },
        axisTick: {
            show: false,
        },
        axisLine: {
            show: true,
            lineStyle: {
                color: "rgba(0,0,0,.1	)",
                width: 1,
                type: "solid"
            },
        },
        splitLine: {
            lineStyle: {
               color: "rgba(0,0,0,.1)",
            }
        }
    }],
    series: [{
        name: '进口量',
        type: 'bar',
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="俄罗斯联邦"){
                        $str = $str."\"".$data->in_m."\",";
                    }
                }
                echo $str;
                ?>],
        barWidth:'15', //柱子宽度
       // barGap: 1, //柱子之间间距
        itemStyle: {
            normal: {
                color:'#2f89cf',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    }, {
        name: '出口量',
        type: 'bar',
		data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="俄罗斯联邦"){
                        $str = $str."\"".$data->ex_m."\",";
                    }
                }
                echo $str;
                ?>],
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#62c98d',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
	]
};

        /*   */
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }
function echarts_5() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart5'));
option = {
  //  backgroundColor: '#00265f',
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['进口较同期增长', '出口较同期增长'],
        align: 'right',
        right: '40%',
		top:'0%',
        textStyle: {
            color: "#fff",
		    fontSize: '16',

        },
 
        itemGap: 35
    },
    grid: {
        left: '0%',
		top:'40px',
        right: '0%',
        bottom: '2%',
       containLabel: true
    },
    xAxis: [{
        type: 'category',
      		data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        axisLine: {
            show: true,
         lineStyle: {
                color: "rgba(0,0,0,.1)",
                width: 1,
                type: "solid"
            },
        },
        axisTick: {
            show: false,
        },
		axisLabel:  {
                interval: 0,
               // rotate:50,
                show: true,
                splitNumber: 15,
                textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
            },
    }],
    yAxis: [{
        type: 'value',
        axisLabel: {
           //formatter: '{value} %'
			show:true,
			 textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
        },
        axisTick: {
            show: false,
        },
        axisLine: {
            show: true,
            lineStyle: {
                color: "rgba(0,0,0,.1	)",
                width: 1,
                type: "solid"
            },
        },
        splitLine: {
            lineStyle: {
               color: "rgba(0,0,0,.1)",
            }
        }
    }],
    series: [{
        name: '进口较同期增长',
        type: 'line',
		
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="俄罗斯联邦"){
                        $str = $str."\"".$data->in_up."\",";
                    }
                }
                echo $str;
                ?>],
       
        itemStyle: {
            normal: {
                color:'#2f89cf',
                opacity: 1,
				
				barBorderRadius: 5,
            }
        }
    }, {
        name: '出口较同期增长',
        type: 'line',
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="俄罗斯联邦"){
                        $str = $str."\"".$data->ex_up."\",";
                    }
                }
                echo $str;
                ?>],
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#62c98d',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
	]
};
       

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }

    function echarts_9() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart9'));
        option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{b} : {c} ({d}%)"
                    },
                    legend: {
                        right:10,
                        top:30,
                        height:140,
                        itemWidth:10,
                        itemHeight:10,
                        itemGap:10,
                        textStyle:{
                            color: 'rgba(0,0,0,.6)',
                            fontSize:12
                        },
                        orient:'vertical',
                        data:['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
                    },
                   calculable : true,
                    series : [
                        {
                            name:' ',
							color: ['#62c98d', '#2f89cf', '#4cb9cf', '#53b666', '#62c98d', '#205acf', '#c9c862', '#c98b62', '#c962b9', '#7562c9','#c96262'],	
                            type:'pie',
                            radius : [30, 70],
                            center : ['35%', '50%'],
                            roseType : 'radius',
                            label: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            lableLine: {
                                normal: {
                                    show: false
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            data:[
                                <?php
                                $str = '';
                                foreach($datas as $data){
                                    if($data->country=="乌克兰"){
                                        $str = $str.'{value:'.$data->in_m.",name:\"".$data->month."月\"},";
                                    }
                                }
                                echo $str;
                                ?>
                            ]
                        },
                    ]
                };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }
function echarts_8() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart8'));

        option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{b} : {c} ({d}%)"
                    },
                    legend: {
                        right:10,
                        top:30,
                        height:140,
                        itemWidth:10,
                        itemHeight:10,
                        itemGap:10,
                        textStyle:{
                            color: 'rgba(0,0,0,.6)',
                            fontSize:12
                        },
                        orient:'vertical',
                        data:['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
                    },
                   calculable : true,
                    series : [
                        {
                            name:' ',
							color: ['#62c98d', '#205acf', '#c9c862', '#c98b62', '#c962b9', '#7562c9','#c96262'],	
                            type:'pie',
                            radius : [30, 70],
                            center : ['35%', '50%'],
                            roseType : 'radius',
                            label: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            lableLine: {
                                normal: {
                                    show: true
                                },
                                emphasis: {
                                    show: true
                                }
                            },

                            data:[
                                <?php
                                $str = '';
                                foreach($datas as $data){
                                    if($data->country=="乌克兰"){
                                        $str = $str.'{value:'.$data->ex_m.",name:\"".$data->month."月\"},";
                                    }
                                }
                                echo $str;
                                ?>
                            ]
                        },
                    ]
                };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }

function echarts_7() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart7'));
option = {
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['进口量', '出口量'],
        align: 'right',
        right: '40%',
		top:'0%',
        textStyle: {
            color: "#fff",
		    fontSize: '16',

        },
        itemWidth: 16,
        itemHeight: 16,
        itemGap: 35
    },
    grid: {
        left: '0%',
		top:'40px',
        right: '0%',
        bottom: '2%',
       containLabel: true
    },
    xAxis: [{
        type: 'category',
      		data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        axisLine: {
            show: true,
         lineStyle: {
                color: "rgba(0,0,0,.1)",
                width: 1,
                type: "solid"
            },
        },
		
        axisTick: {
            show: false,
        },
		axisLabel:  {
                interval: 0,
               // rotate:50,
                show: true,
                splitNumber: 15,
                textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
            },
    }],
    yAxis: [{
        type: 'value',
        axisLabel: {
           //formatter: '{value} %'
			show:true,
			 textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
        },
        axisTick: {
            show: false,
        },
        axisLine: {
            show: true,
            lineStyle: {
                color: "rgba(0,0,0,.1	)",
                width: 1,
                type: "solid"
            },
        },
        splitLine: {
            lineStyle: {
               color: "rgba(0,0,0,.1)",
            }
        }
    }],
    series: [{
        name: '进口量',
        type: 'bar',
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="乌克兰"){
                        $str = $str."\"".$data->in_m."\",";
                    }
                }
                echo $str;
                ?>],
        barWidth:'15', //柱子宽度
       // barGap: 1, //柱子之间间距
        itemStyle: {
            normal: {
                color:'#2f89cf',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    }, {
        name: '出口量',
        type: 'bar',
		data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="乌克兰"){
                        $str = $str."\"".$data->ex_m."\",";
                    }
                }
                echo $str;
                ?>],
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#62c98d',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
	]
};

        /*   */
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }
function echarts_10() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart10'));
option = {
  //  backgroundColor: '#00265f',
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['进口较同期增长', '出口较同期增长'],
        align: 'right',
        right: '40%',
		top:'0%',
        textStyle: {
            color: "#fff",
		    fontSize: '16',

        },
 
        itemGap: 35
    },
    grid: {
        left: '0%',
		top:'40px',
        right: '0%',
        bottom: '2%',
       containLabel: true
    },
    xAxis: [{
        type: 'category',
      		data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        axisLine: {
            show: true,
         lineStyle: {
                color: "rgba(0,0,0,.1)",
                width: 1,
                type: "solid"
            },
        },
        axisTick: {
            show: false,
        },
		axisLabel:  {
                interval: 0,
               // rotate:50,
                show: true,
                splitNumber: 15,
                textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
            },
    }],
    yAxis: [{
        type: 'value',
        axisLabel: {
           //formatter: '{value} %'
			show:true,
			 textStyle: {
 					color: "rgba(0,0,0,.6)",
                    fontSize: '16',
                },
        },
        axisTick: {
            show: false,
        },
        axisLine: {
            show: true,
            lineStyle: {
                color: "rgba(0,0,0,.1	)",
                width: 1,
                type: "solid"
            },
        },
        splitLine: {
            lineStyle: {
               color: "rgba(0,0,0,.1)",
            }
        }
    }],
    series: [{
        name: '进口较同期增长',
        type: 'line',
		
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="乌克兰"){
                        $str = $str."\"".$data->in_up."\",";
                    }
                }
                echo $str;
                ?>],
       
        itemStyle: {
            normal: {
                color:'#2f89cf',
                opacity: 1,
				
				barBorderRadius: 5,
            }
        }
    }, {
        name: '出口较同期增长',
        type: 'line',
        data: [<?php
                $str = '';
                foreach($datas as $data){
                    if($data->country=="乌克兰"){
                        $str = $str."\"".$data->ex_up."\",";
                    }
                }
                echo $str;
                ?>],
		barWidth:'15',
       // barGap: 1,
        itemStyle: {
            normal: {
                color:'#62c98d',
                opacity: 1,
				barBorderRadius: 5,
            }
        }
    },
	]
};
       

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize",function(){
            myChart.resize();
        });
    }
})


</script>

</body>
</html>