function recarga1()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: 50,
             fill: 'black'
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true,
             fill: 'black'


        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            pie: {
                pointPadding: 0.2,
                borderWidth: 0,
                 fill: 'black'
            }
        },
        series: [
        ]
    }
    var url = 'ajax_json.php?caso=depto1';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = '';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = '';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}

function recarga2()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto2';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga3()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto3';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga4()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto4';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga5()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto5';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}


function recarga6()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto6';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga7()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto7';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}


function recarga8()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto8';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}

function recarga9()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto9';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
       // options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}

function recarga10()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto10';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga11()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto11';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}

function recarga12()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto12';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
       // options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}

function recarga13()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto13';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}
function recarga14()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto14';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}


function recarga15()
{
    var options = {
        chart: {
            renderTo: 'container_highchart',
            type: 'column',
            margin: [ 50, 50, 120, 80]
        },
        title: {
            text: 'Resultados'
        },
        xAxis: [],
        yAxis: {
            min: 0,
            title: {
                text: 'Porcentaje'
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'left',
            verticalAlign: 'top',
            x: 80,
            y: 40,
            floating: true,
            shadow: true
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.x +'</b><br/>' + this.series.name + ': ' + this.y + ' Numero de votos';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: []
    }
    var url = 'ajax_json.php?caso=depto15';
    var xAxis = {
        categories: [],
        labels: {
            rotation: -45,
            align: 'right',
            style: {
                fontSize: '12px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    };
    var seriesTotal = {
        data: []
    };
    seriesTotal.name = 'Partidos';
    var seriesMasculino = {
        data: []
    };
    seriesMasculino.name = 'ARENA';
    var seriesFemenino = {
        data: []
    };
    seriesFemenino.name = 'GANA';
    jQuery.getJSON(url, function(data) {
        jQuery.each(data, function(key1,val1) {
            xAxis.categories.push(key1);
            jQuery.each(val1, function(key2,val2) {
                if(key2 == 0){
                    seriesTotal.data.push(val2);
                }
                else if(key2 == 1){
                    seriesMasculino.data.push(val2);
                }
                else if(key2 == 2){
                    seriesFemenino.data.push(val2);
                }
            });
        });
        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        //options.series.push(seriesMasculino);
        //options.series.push(seriesFemenino);
        var chart = new Highcharts.Chart(options);
    });
    return false;
}