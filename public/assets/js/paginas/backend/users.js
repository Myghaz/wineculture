let usersdata = [user_utl_12_total, user_utl_11_total, user_utl_10_total, user_utl_9_total, user_utl_8_total, user_utl_7_total, user_utl_6_total, user_utl_5_total, user_utl_4_total, user_utl_3_total, user_utl_2_total, user_utl_1_total];
var monthName = new Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
var d = new Date();
d.setDate(1);
var tt = new Array();
for (i = 0; i <= 11; i++) {
  tt[i] = (monthName[d.getMonth()] + ' ' + d.getFullYear());
  d.setMonth(d.getMonth() - 1);
}
tt = tt.reverse();
Datausers = {
    labels: tt,
    datasets: [{
        label: "Registos",
        backgroundColor: "white",
        data: usersdata,
        lineTension: 0,
        fill: 'white',
        backgroundColor: ["#955251", "#B565A7", "#009B77", "#DD4124", "#45B8AC", "#D65076", "#5B5EA6", "#9B2335", "black", "#DFCFBE", "#55B4B0", "#EFC050"],
    }]
};

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


let generosdata = [users_masculino_total, users_feminino_total, users_nao_revelar_total, users_genero_null_total];
Datausers = {
    labels: [
      "Masculino",
      "Feminino",
      "Não Revelar",
      "Não Definido"
    ],
    datasets: [{
        label: "Género",
        backgroundColor: "white",
        data: generosdata,
        lineTension: 0,
        fill: 'white',
        backgroundColor: ["#955251", "#B565A7", "#009B77", "#DD4124", "#45B8AC", "#D65076", "#5B5EA6", "#9B2335", "black", "#DFCFBE", "#55B4B0", "#EFC050"],
    }]
};

var usersbarX = document.getElementById("generosgrafico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "polarArea",
    data: Datausers,
    options: {
      legend: {
        display: true,
        position: 'top',
        labels: {
          fontColor: "#000080",
        }
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
function updategenenrosChartType() {
  // here we destroy/delete the old or previous chart and redraw it again
 

  generosChart.destroy();
  generosChart = new Chart(generosbarX, {
      type: $(event.target).val(),
      data: Datausers,
      options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: true,
            position: 'top',
            labels: {
              fontColor: "#000080",
            }
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