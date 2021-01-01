
$(".media-left").css("display", "none");
$(".media-right").css("display", "none");
$(document).ready(function() {
  $(".media-message").click(function(event) {
    var activechat = (event.target.id);
    $(".media-left").css("display", "none");
    $(".media-right").css("display", "none");
    $('.' + activechat).css("display", "flex");



    $("#chat-right-content").animate({ scrollTop: $('#chat-right-content').prop("scrollHeight")}, 1000);
  });
});

$('#chatbox a').click( function(e) {e.preventDefault(); return false; } );
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

jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    'locale-compare-asc': function(a, b) {
        return a.localeCompare(b, 'cs', { sensitivity: 'case' })
    },
    'locale-compare-desc': function(a, b) {
        return b.localeCompare(a, 'cs', { sensitivity: 'case' })
    }
})

jQuery.fn.dataTable.ext.type.search['locale-compare'] = function(data) {
    return NeutralizeAccent(data);
}

function NeutralizeAccent(data) {
    return !data ?
        '' :
        typeof data === 'string' ?
        data
        .replace(/\n/g, ' ')
        .replace(/[éÉěĚèêëÈÊË]/g, 'e')
        .replace(/[šŠ]/g, 's')
        .replace(/[čČçÇ]/g, 'c')
        .replace(/[řŘ]/g, 'r')
        .replace(/[žŽ]/g, 'z')
        .replace(/[ýÝ]/g, 'y')
        .replace(/[áÁâàÂÀ]/g, 'a')
        .replace(/[íÍîïÎÏ]/g, 'i')
        .replace(/[ťŤ]/g, 't')
        .replace(/[ďĎ]/g, 'd')
        .replace(/[ňŇ]/g, 'n')
        .replace(/[óÓ]/g, 'o')
        .replace(/[úÚůŮ]/g, 'u') :
        data
}
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "portugues-pre": function(data) {
        var a = 'a';
        var e = 'e';
        var i = 'i';
        var o = 'o';
        var u = 'u';
        var c = 'c';
        var special_letters = {
            "Á": a,
            "á": a,
            "Ã": a,
            "ã": a,
            "À": a,
            "à": a,
            "É": e,
            "é": e,
            "Ê": e,
            "ê": e,
            "Í": i,
            "í": i,
            "Î": i,
            "î": i,
            "Ó": o,
            "ó": o,
            "Õ": o,
            "õ": o,
            "Ô": o,
            "ô": o,
            "Ú": u,
            "ú": u,
            "Ü": u,
            "ü": u,
            "ç": c,
            "Ç": c
        };
        for (var val in special_letters)
            data = data.split(val).join(special_letters[val]).toLowerCase();
        return data;
    },
    "portugues-asc": function(a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "portugues-desc": function(a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});

$(document).ready(function() {
    jQuery('#datatable-table_filter input').keyup(function() {
        table
            .search(
                jQuery.fn.DataTable.ext.type.search.string(this.value)
            )
            .draw();
    });
    $(document).ready(function() {

    });

$('#tableausers').dataTable({
    dom: 'lBfrtip',
    "scrollY": "350px",
    "scrollCollapse": true,
    "autoWidth": true,
    "columns": [
        { "type": "num" },
        null,
        null,
        null,
        null
    ],
    "order": [
        [1, 'asc']
    ],
    "language": {
        "emptyTable": "Não existem registos a apresentar",
        "info": "A mostrar _START_ até _END_ de _TOTAL_ registos",
        "infoEmpty": "",
        "sSearch": "Procurar:",
        "paginate": {
            "next": "Próximo",
            "previous": "Anterior"
        },
        "sLengthMenu": "Mostrar _MENU_ registos",
        "infoFiltered": "(filtrado do total de _MAX_ registos)",
        "zeroRecords": "Não existem resultados baseados na pesquisa",
    },
    "columnDefs": [{
        type: 'portugues',
        targets: [0, 1, 2, 3, 4]
    }],
    "columnDefs": [{
        type: 'locale-compare',
        targets: [0, 1, 2, 3, 4]
    }],
});

$('#tableaprodutores').dataTable({
  dom: 'lBfrtip',
  "scrollY": "350px",
  "scrollCollapse": true,
  "autoWidth": true,
  "columns": [
      { "type": "num" },
      null,
      null,
      null
  ],
  "order": [
      [1, 'asc']
  ],
  "language": {
      "emptyTable": "Não existem registos a apresentar",
      "info": "A mostrar _START_ até _END_ de _TOTAL_ registos",
      "infoEmpty": "",
      "sSearch": "Procurar:",
      "paginate": {
          "next": "Próximo",
          "previous": "Anterior"
      },
      "sLengthMenu": "Mostrar _MENU_ registos",
      "infoFiltered": "(filtrado do total de _MAX_ registos)",
      "zeroRecords": "Não existem resultados baseados na pesquisa",
  },
  "columnDefs": [{
      type: 'portugues',
      targets: [0, 1, 2, 3]
  }],
  "columnDefs": [{
      type: 'locale-compare',
      targets: [0, 1, 2, 3]
  }],
});

$('#tableaprods_wp').dataTable({
  dom: 'lBfrtip',
  "scrollY": "350px",
  "scrollCollapse": true,
  "autoWidth": true,
  "columns": [
      { "type": "num" },
      null,
      null,
      null,
      null
  ],
  "order": [
      [0, 'asc']
  ],
  "language": {
      "emptyTable": "Não existem registos a apresentar",
      "info": "A mostrar _START_ até _END_ de _TOTAL_ registos",
      "infoEmpty": "",
      "sSearch": "Procurar:",
      "paginate": {
          "next": "Próximo",
          "previous": "Anterior"
      },
      "sLengthMenu": "Mostrar _MENU_ registos",
      "infoFiltered": "(filtrado do total de _MAX_ registos)",
      "zeroRecords": "Não existem resultados baseados na pesquisa",
  },
  "columnDefs": [{
      type: 'portugues',
      targets: [0, 1, 2, 3, 4]
  }],
  "columnDefs": [{
      type: 'locale-compare',
      targets: [0, 1, 2, 3, 4]
  }],
});
});

//////// Botão da Tabela Utilizadores //////// 
$( "#btnusers" ).click(function() {
  $( "#tableaprodutores" ).hide();
  $( "#tableaprodutores_wrapper" ).hide();

  $( "#tableaprods_wp" ).hide();
  $( "#tableaprods_wp_wrapper" ).hide();


  $( "#tableausers" ).show();
  $("#tableausers_wrapper").css("display", "inline");
  document.getElementById("titulotable").innerHTML = "Tabela de Utilizadores";
  $($.fn.dataTable.tables(true)).DataTable()
   .columns.adjust();
});
//////// Botão da Tabela Utilizadores //////// 


//////// Botão da Tabela Produtores //////// 
$( "#btnprodutores" ).click(function() {
  $( "#tableausers" ).hide();
  $( "#tableausers_wrapper" ).hide();

  $( "#tableaprods_wp" ).hide();
  $( "#tableaprods_wp_wrapper" ).hide();


  $( "#tableaprodutores" ).show();
  $("#tableaprodutores_wrapper").css("display", "inline");
  document.getElementById("titulotable").innerHTML = "Tabela de Produtores";
  $($.fn.dataTable.tables(true)).DataTable()
   .columns.adjust();
});
//////// Botão da Tabela Produtores //////// 



//////// Botão da Tabela Produtos WordPress //////// 
$( "#btnprods_wp" ).click(function() {
  $( "#tableausers" ).hide();
  $( "#tableausers_wrapper" ).hide();

  $("#tableaprodutores").hide();
  $("#tableaprodutores_wrapper").hide();

  $("#tableaprods_wp").show();
  $("#tableaprods_wp_wrapper").css("display", "inline");
  document.getElementById("titulotable").innerHTML = "Tabela de Produtos (WordPress)";
  $($.fn.dataTable.tables(true)).DataTable()
   .columns.adjust();
});
//////// Botão da Tabela Produtos WordPress //////// 

