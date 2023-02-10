$(window).load(function() {
    $(".loading").fadeOut()
})
$(function() {
    echarts_1();
    echarts_2();
    echarts_3();
    echarts_4();
    echarts_5();
    zb1();
    zb2();
    zb3();
    zb4();
    zb5();
    zb6();

    function echarts_1() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart1'));
        option = {
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function echarts_2() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart2'));

        option = {
        //     tooltip: {
        //         trigger: 'item',
        //         formatter: "{b} : {c} ({d}%)"
        //     },
        //     legend: {
        //
        //         top: '15%',
        //         data: ['LNG\nLight', 'RNG\nXLB', 'FPX\nDoinb', 'IG\nTheShy', 'TES\nknight'],
        //         icon: 'circle',
        //         textStyle: {
        //             color: 'rgba(255,255,255,.6)',
        //         }
        //     },
        //     calculable: true,
        //     series: [{
        //         name: '',
        //         color: ['#62c98d', '#2f89cf', '#4cb9cf', '#53b666', '#62c98d', '#205acf', '#c9c862', '#c98b62', '#c962b9', '#c96262'],
        //         type: 'pie',
        //         //起始角度，支持范围[0, 360]
        //         startAngle: 0,
        //         //饼图的半径，数组的第一项是内半径，第二项是外半径
        //         radius: [51, 100],
        //         //支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度
        //         center: ['50%', '45%'],
        //
        //         //是否展示成南丁格尔图，通过半径区分数据大小。可选择两种模式：
        //         // 'radius' 面积展现数据的百分比，半径展现数据的大小。
        //         //  'area' 所有扇区面积相同，仅通过半径展现数据大小
        //         roseType: 'area',
        //         //是否启用防止标签重叠策略，默认开启，圆环图这个例子中需要强制所有标签放在中心位置，可以将该值设为 false。
        //         avoidLabelOverlap: false,
        //         label: {
        //             normal: {
        //                 show: true,
        //                 //  formatter: '{c}辆'
        //             },
        //             emphasis: {
        //                 show: true
        //             }
        //         },
        //         labelLine: {
        //             normal: {
        //                 show: true,
        //                 length2: 1,
        //             },
        //             emphasis: {
        //                 show: true
        //             }
        //         },
        //         data: [{
        //                 value: 1,
        //                 name: 'LNG\nLight',
        //             },
        //             {
        //                 value: 4,
        //                 name: 'RNG\nXLB',
        //             },
        //             {
        //                 value: 5,
        //                 name: 'FPX\nDoinb',
        //             },
        //             {
        //                 value: 6,
        //                 name: 'IG\nTheShy',
        //             },
        //             {
        //                 value: 9,
        //                 name: 'TES\nknight',
        //             },
        //
        //
        //
        //             {
        //                 value: 0,
        //                 name: "",
        //                 label: {
        //                     show: false
        //                 },
        //                 labelLine: {
        //                     show: false
        //                 }
        //             },
        //             {
        //                 value: 0,
        //                 name: "",
        //                 label: {
        //                     show: false
        //                 },
        //                 labelLine: {
        //                     show: false
        //                 }
        //             },
        //             {
        //                 value: 0,
        //                 name: "",
        //                 label: {
        //                     show: false
        //                 },
        //                 labelLine: {
        //                     show: false
        //                 }
        //             },
        //             {
        //                 value: 0,
        //                 name: "",
        //                 label: {
        //                     show: false
        //                 },
        //                 labelLine: {
        //                     show: false
        //                 }
        //             },
        //             {
        //                 value: 0,
        //                 name: "",
        //                 label: {
        //                     show: false
        //                 },
        //                 labelLine: {
        //                     show: false
        //                 }
        //             },
        //
        //
        //         ]
        //     }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function echarts_3() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart3'));

        option = {
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function() {
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
                    lineStyle: {
                        color: '#57617B'
                    }
                }
            },
            "legend": {

                "data": [{
                        "name": "Dead Of Russia"
                    },
                    {
                        "name": "Dead Of Ukraine"
                    },
                    {
                        "name": "死亡比例"
                    }
                ],
                "top": "0%",
                "textStyle": {
                    "color": "rgba(255,255,255,1)", //图例文字
                    "fontSize": "16"
                }
            },

            "xAxis": [{
                "type": "category",

                data: ['2022-6-9', '2022-6-22', '2022-7-4', '2022-8-18', '2022-9-22'],
                axisLine: {
                    lineStyle: {
                        color: "rgba(255,255,255,.1)"
                    }
                },
                axisLabel: {
                    textStyle: {
                        color: "rgb(255,255,255)",
                        fontSize: '16',
                    },
                },

            }, ],
            "yAxis": [{
                    "type": "value",
                    "name": "人数",
                    "min": 0,
                    "interval": 500,
                    "axisLabel": {
                        "show": true,

                    },
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(255,255,255,1)'
                        }
                    }, //左线色
                    splitLine: {
                        show: true,
                        lineStyle: {
                            color: "rgba(255,255,255,0.5)"
                        }
                    }, //x轴线
                },
                {
                    "type": "value",
                    "name": "比例",
                    "show": true,
                    "axisLabel": {
                        "show": true,

                    },
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(255,255,255,1 )'
                        }
                    }, //右线色
                    splitLine: {
                        show: true,
                        lineStyle: {
                            color: "rgba(255,255,255,0.2)"
                        }
                    }, //x轴线
                },
            ],
            "grid": {
                "top": "10%",
                "right": "30",
                "bottom": "30",
                "left": "40",
            },
            "series": [{
                    "name": "Dead Of Russia",

                    "type": "bar",
                    "data": [3379, 3758, 4157, 5240, 6093],
                    "barWidth": "auto",
                    "itemStyle": {
                        "normal": {
                            "color": {
                                "type": "linear",
                                "x": 0,
                                "y": 0,
                                "x2": 0,
                                "y2": 1,
                                "colorStops": [{
                                        "offset": 0,
                                        "color": "#67E0E3"
                                    },

                                    {
                                        "offset": 1,
                                        "color": "#67E0E3"
                                    }
                                ],
                                "globalCoord": false
                            }
                        }
                    }
                },
                {
                    "name": "Dead Of Ukraine",
                    "type": "bar",
                    "data": [
                        4266,4569,4731,5514,6910
                    ],
                    "barWidth": "auto",

                    "itemStyle": {
                        "normal": {
                            "color": {
                                "type": "linear",
                                "x": 0,
                                "y": 0,
                                "x2": 0,
                                "y2": 1,
                                "colorStops": [{
                                        "offset": 0,
                                        "color": "#FFDB5C"
                                    },
                                    {
                                        "offset": 1,
                                        "color": "#FFDB5C"
                                    }
                                ],
                                "globalCoord": false
                            }
                        }
                    },
                    "barGap": "0"
                },
                {
                    "name": "死亡比例",
                    "type": "line",
                    "yAxisIndex": 1,

                    "data": [79, 82, 87, 95, 88],
                    lineStyle: {
                        normal: {
                            width: 2
                        },
                    },
                    "itemStyle": {
                        "normal": {
                            "color": "#48f593",

                        }
                    },
                    "smooth": true
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function echarts_5() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('echart5'));
        var option = {

        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb1() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb1'));
        var v2 = 738 //俄罗斯损失数量
        var v1 = 185 //乌克兰损失数量
        var v3 = v1 + v2 //总消费 
        option = {
            tooltip: {
                trigger: 'item',
            },
            series: [{

                type: 'pie',
                radius: ['60%', '70%'],
                color: '#37A2DA',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v2,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter: '总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v1,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter: v1 + v2+ '',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb2() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb2'));
        var v1 = 809 //总击杀
        var v2 = 112 //总死亡
        var v3 = v1 + v2 //
        option = {

            tooltip: {
                trigger: 'item',
            },
            series: [{
                type: 'pie',
                radius: ['60%', '70%'],
                color: '#32C5E9',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter: '总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter: v1 +v2 +'',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb3() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb3'));
        var v1 = 112 //排眼
        var v2 = 64 //插眼
        var v3 = v1 + v2 //总消费 
        option = {
            tooltip: {
                trigger: 'item',
            },
            series: [{

                type: 'pie',
                radius: ['60%', '70%'],
                color: '#67E0E3',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter: '总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter:v3+'',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb4() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb4'));
        var v1 = 29 //死亡
        var v2 = 25 //击杀
        var v3 = v1 + v2

        option = {
            tooltip: {
                trigger: 'item',
            },
            series: [{

                type: 'pie',
                radius: ['60%', '70%'],
                color: '#9FE6B8',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter:'总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter:v3+'',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb5() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb5'));
        var v1 = 43 //助攻和击杀
        var v2 = 9 //死亡
        var v3 = v1 + v2 //总消费
        option = {
            tooltip: {
                trigger: 'item',
            },
            series: [{

                type: 'pie',
                radius: ['60%', '70%'],
                color: '#FFDB5C',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter: '总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter: v3 + '',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }

    function zb6() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('zb6'));
        var v1 = 79;
        var v2 = 24;
        var v3 = v1 + v2; //击杀和助攻
        option = {
            tooltip: {
                trigger: 'item',
            },
            series: [{

                type: 'pie',
                radius: ['60%', '70%'],
                color: '#FB7293',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '俄罗斯',
                    label: {
                        normal: {
                            formatter: '总损失',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '乌克兰',
                    label: {
                        normal: {
                            formatter: v3+'',
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        myChart.setOption(option);
        window.addEventListener("resize", function() {
            myChart.resize();
        });
    }
})