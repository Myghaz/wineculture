// Define data set for the chart
let usersdata = [totalUsersJan, totalUsersFev, totalUsersMar, totalUsersAbr, totalUsersMai, totalUsersJun, totalUsersJul, totalUsersAgo, totalUsersSet, totalUsersOut, totalUsersNov, totalUsersDez];
Datausers = {
    labels: [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
      ],
    datasets: [{
        label: "Registos",
        backgroundColor: "white",
        data: usersdata,
        lineTension: 0,
        fill: true,
        backgroundColor: ["#955251","#B565A7","#009B77","#DD4124","#45B8AC","#D65076","#5B5EA6", "#9B2335","black","#DFCFBE","#55B4B0","#EFC050"],
    }]
};

let produtoresdata = [totalProdutoresJan, totalProdutoresFev, totalProdutoresMar, totalProdutoresAbr, totalProdutoresMai, totalProdutoresJun, totalProdutoresJul, totalProdutoresAgo, totalProdutoresSet, totalProdutoresOut, totalProdutoresNov, totalProdutoresDez],
Dataprodutores = {
    labels: [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
      ],
    datasets: [{
        label: "Registos",
        backgroundColor: "white",
        data: produtoresdata,
        lineTension: 0,
        fill: true,
        backgroundColor: ["#955251","#B565A7","#009B77","#DD4124","#45B8AC","#D65076","#5B5EA6", "#9B2335","black","#DFCFBE","#55B4B0","#EFC050"],
    }]
};

// Define data set for the chart
let comprasdata = [totalProdsJan, totalProdsFev, totalProdsMar, totalProdsAbr, totalProdsMai, totalProdsJun, totalProdsJul, totalProdsAgo, totalProdsSet, totalProdsOut, totalProdsNov, totalProdsDez],
Datacompras = {
    labels: [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
      ],
    datasets: [{
        label: "Registos",
        backgroundColor: "white",
        data: comprasdata,
        lineTension: 0,
        fill: true,
        backgroundColor: ["#955251","#B565A7","#009B77","#DD4124","#45B8AC","#D65076","#5B5EA6", "#9B2335","black","#DFCFBE","#55B4B0","#EFC050"],
    }]
};

// Define data set for the chart
let prodsdata = [totalProdsJan, totalProdsFev, totalProdsMar, totalProdsAbr, totalProdsMai, totalProdsJun, totalProdsJul, totalProdsAgo, totalProdsSet, totalProdsOut, totalProdsNov, totalProdsDez],
Dataprods = {
    labels: [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
      ],
    datasets: [{
        label: "Registos",
        backgroundColor: "white",
        data: prodsdata,
        lineTension: 0,
        fill: true,
        backgroundColor: ["#955251","#B565A7","#009B77","#DD4124","#45B8AC","#D65076","#5B5EA6", "#9B2335","black","#DFCFBE","#55B4B0","#EFC050"],
    }]
};

// Default chart defined with type: 'line'

var usersbarX = document.getElementById("usersgrafico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "bar",
    data: Datausers,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          xAxes: [
            {
              gridLines: {
                drawBorder: false,
                display: false
              },
              ticks: {
                display: false, // hide main x-axis line
                beginAtZero: true
              },
              barPercentage: 3,
              categoryPercentage: 0.2
            }
          ],
          yAxes: [
            {
              gridLines: {
                drawBorder: false, // hide main y-axis line
                display: false
              },
              ticks: {
                display: false,
                beginAtZero: true
              }
            }
          ]
        },
    }
});
var produtoresbarX = document.getElementById("produtoresgrafico").getContext("2d");
var produtoresChart = new Chart(produtoresbarX, {
    type: "bar",
    data: Dataprodutores,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          xAxes: [
            {
              gridLines: {
                drawBorder: false,
                display: false
              },
              ticks: {
                display: false, // hide main x-axis line
                beginAtZero: true
              },
              barPercentage: 3,
              categoryPercentage: 0.2
            }
          ],
          yAxes: [
            {
              gridLines: {
                drawBorder: false, // hide main y-axis line
                display: false
              },
              ticks: {
                display: false,
                beginAtZero: true
              }
            }
          ]
        },
    }
});
var comprasbarX = document.getElementById("comprasgrafico").getContext("2d");
var comprasChart = new Chart(comprasbarX, {
    type: "bar",
    data: Datacompras,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          xAxes: [
            {
              gridLines: {
                drawBorder: false,
                display: false
              },
              ticks: {
                display: false, // hide main x-axis line
                beginAtZero: true
              },
              barPercentage: 3,
              categoryPercentage: 0.2
            }
          ],
          yAxes: [
            {
              gridLines: {
                drawBorder: false, // hide main y-axis line
                display: false
              },
              ticks: {
                display: false,
                beginAtZero: true
              }
            }
          ]
        },
    }
});
var prodsbarX = document.getElementById("prodsgrafico").getContext("2d");
var prodsChart = new Chart(prodsbarX, {
    type: "bar",
    data: Dataprods,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          xAxes: [
            {
              gridLines: {
                drawBorder: false,
                display: false
              },
              ticks: {
                display: false, // hide main x-axis line
                beginAtZero: true
              },
              barPercentage: 3,
              categoryPercentage: 0.2
            }
          ],
          yAxes: [
            {
              gridLines: {
                drawBorder: false, // hide main y-axis line
                display: false
              },
              ticks: {
                display: false,
                beginAtZero: true
              }
            }
          ]
        },
    }
});
// Function runs on chart type select update
function updateusersChartType() {
    // here we destroy/delete the old or previous chart and redraw it again
   
  
    usersChart.destroy();
    usersChart = new Chart(usersbarX, {
        type: $(event.target).val(),
        data: Datausers,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              display: false
            },
            scales: {
              xAxes: [
                {
                   
                  gridLines: {
                    drawBorder: false,
                    display: false
                  },
                  ticks: {
                    display: false, // hide main x-axis line
                    beginAtZero: true
                  },
                  barPercentage:3,
                  categoryPercentage: 0.2
                }
              ],
              yAxes: [
                {  
                  gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                  },
                  ticks: {
                    display: false,
                    beginAtZero: true,
                  }
                }
              ]
            },
        }
    });
};
function updateprodutoresChartType() {
    // here we destroy/delete the old or previous chart and redraw it again
   
  
    produtoresChart.destroy();
    produtoresChart = new Chart(produtoresbarX, {
        type: $(event.target).val(),
        data: Dataprodutores,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              display: false
            },
            scales: {
              xAxes: [
                {
                   
                  gridLines: {
                    drawBorder: false,
                    display: false
                  },
                  ticks: {
                    display: false, // hide main x-axis line
                    beginAtZero: true
                  },
                  barPercentage:3,
                  categoryPercentage: 0.2
                }
              ],
              yAxes: [
                {  
                  gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                  },
                  ticks: {
                    display: false,
                    beginAtZero: true,
                  }
                }
              ]
            },
        }
    });
};
function updatecomprasChartType() {
    // here we destroy/delete the old or previous chart and redraw it again
   
  
    comprasChart.destroy();
    comprasChart = new Chart(comprasbarX, {
        type: $(event.target).val(),
        data: Datacompras,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              display: false
            },
            scales: {
              xAxes: [
                {
                  gridLines: {
                    drawBorder: false,
                    display: false
                  },
                  ticks: {
                    display: false, // hide main x-axis line
                    beginAtZero: true
                  },
                  barPercentage:3,
                  categoryPercentage: 0.2
                }
              ],
              yAxes: [
                {  
                  gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                  },
                  ticks: {
                    display: false,
                    beginAtZero: true,
                  }
                }
              ]
            },
        }
    });
};
function updateprodsChartType() {
    // here we destroy/delete the old or previous chart and redraw it again
   
  
    prodsChart.destroy();
    prodsChart = new Chart(prodsbarX, {
        type: $(event.target).val(),
        data: Dataprods,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
              display: false
            },
            scales: {
              xAxes: [
                {
                   
                  gridLines: {
                    drawBorder: false,
                    display: false
                  },
                  ticks: {
                    display: false, // hide main x-axis line
                    beginAtZero: true
                  },
                  barPercentage:3,
                  categoryPercentage: 0.2
                }
              ],
              yAxes: [
                {  
                  gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                  },
                  ticks: {
                    display: false,
                    beginAtZero: true,
                  }
                }
              ]
            },
        }
    });
};