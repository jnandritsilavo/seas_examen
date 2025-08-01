
  document.addEventListener("DOMContentLoaded", function() {
    $.getJSON(base_url +  "public/seas_file/bacc.json", function(data) {
        if (window.ApexCharts) {
            new ApexCharts(document.getElementById('statistics-bacc'), {
                chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 320,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: true,
      			},
      			animations: {
      				enabled: true
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: true,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Mention",
      			data: data.map(item => parseInt(item.number))
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: data.map(item => item.bacc_mention)
            },
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: true,
      		},
            }).render();
        }
    }).fail(function(jqxhr, textStatus, error) {
        console.log("Failed to load JSON: " + error);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    $.getJSON(base_url +  "public/seas_file/agence.json", function(data) {
        if (window.ApexCharts) {
            new ApexCharts(document.getElementById('statistics-agence'), {
                series: [{
                name: "Nombre de paiement",
                data: data.map(item => parseInt(item.number)) 
            }],
            chart: {
                type: 'bar',
                height: 1200,
                toolbar: {
                    show: true,
                },
                animations: {
                    enabled: true
                },
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: data.map(item => item.payment_baobab_code)
            }
            }).render();
        }
    }).fail(function(jqxhr, textStatus, error) {
        console.log("Failed to load JSON: " + error);
    });
});



document.addEventListener("DOMContentLoaded", function() {
    $.getJSON(base_url +  "public/seas_file/statistics_age.json", function(data) {
        if (window.ApexCharts) {
            new ApexCharts(document.getElementById('statistics-age'), {
                chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 240,
                parentHeightOffset: 0,
                toolbar: {
                    show: true,
                },
                animations: {
                    enabled: true
                },
            },
            dataLabels: {
                enabled: true,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "Nombre",
                data: data.map(item => parseInt(item.number_pers))
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'number',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: data.map(item => parseInt(item.age))
            ,
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            }
            }).render();
        }
    }).fail(function(jqxhr, textStatus, error) {
        console.log("Failed to load JSON: " + error);
    });
});