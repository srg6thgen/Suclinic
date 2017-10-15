// based on prepared DOM, initialize echarts instance
      




        var myChart = echarts.init(document.getElementById('medical_cases_chart'));

        // specify chart configuration item and data
        var option = {
    title: {
     
    },
    tooltip : {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            label: {
                backgroundColor: '#6a7985'
            }
        }
    },
    legend: {
        data:['Headache','Colds','Allergies','Diarrhea ','Stress/Depression']
    },
    toolbox: {
        feature: {
            magicType: {
                      show: true,
                      title: {
                        line: 'Line',
                        bar: 'Bar',
                        stack: 'Stack',
                        tiled: 'Tiled'
                      },
                      type: ['line', 'bar', 'stack', 'tiled']
                    },
                restore: {
                      show: true,
                      title: "Restore"
                    },
            saveAsImage: {}

        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['BSIT','BBTE','BSCS','HRDM','DICT','BSCE','DOMT']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Headache',
            type:'line',
            stack: 'save',
            areaStyle: {normal: {}},
            data:[120, 132, 101, 134, 90, 230, 210]
        },
        {
            name:'Colds',
            type:'line',
            stack: 'save',
            areaStyle: {normal: {}},
            data:[220, 182, 191, 234, 290, 330, 310]
        },
        {
            name:'Allergies',
            type:'line',
            stack: 'save',
            areaStyle: {normal: {}},
            data:[150, 232, 201, 154, 190, 330, 410]
        },
        {
            name:'Diarrhea',
            type:'line',
            stack: 'save',
            areaStyle: {normal: {}},
            data:[320, 332, 301, 334, 390, 330, 320]
        },
        {
            name:'Stress/Depression',
            type:'line',
            stack: 'save',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            areaStyle: {normal: {}},
            data:[820, 932, 901, 934, 1290, 1330, 1320]
        }
    ]
};

        // use configuration item and data specified to show chart
        myChart.setOption(option);