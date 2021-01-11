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
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: false
                },
                ticks: {
                    display: true, // hide main x-axis line
                    beginAtZero: false
                },
                barPercentage: 4,
                categoryPercentage: 0.2
            }],
            yAxes: [{
                gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                },
                ticks: {
                    display: false,
                    beginAtZero: true
                }
            }]
        },
    }
});

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
        backgroundColor: ["#009063", "#ff6f9c", "#191970", "#b7b7b7"],
    }]
};

var usersbarX = document.getElementById("generosgradfico").getContext("2d");
var usersChart = new Chart(usersbarX, {
    type: "pie",
    data: Datausers,

    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        legend: {
            position: "bottom",
            align: "start"
        },
        scales: {
            xAxes: [{
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
            }],
            yAxes: [{
                gridLines: {
                    drawBorder: false, // hide main y-axis line
                    display: false
                },
                ticks: {
                    display: false,
                    beginAtZero: true
                }
            }]
        },
    }
});
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
        null,
        null,
        null
    ],
    "order": [
        [2, 'asc']
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
        targets: [0, 1, 2, 3, 4,5]
    }],
    "columnDefs": [{
        type: 'locale-compare',
        targets: [0, 1, 2, 3, 4,5]
    }],
});
});
