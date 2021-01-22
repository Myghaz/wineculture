jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "locale-compare-asc": function(a, b) {
        return a.localeCompare(b, "cs", {
            sensitivity: "case"
        });
    },
    "locale-compare-desc": function(a, b) {
        return b.localeCompare(a, "cs", {
            sensitivity: "case"
        });
    }
});

jQuery.fn.dataTable.ext.type.search["locale-compare"] = function(data) {
    return NeutralizeAccent(data);
};

function NeutralizeAccent(data) {
    return !data
        ? ""
        : typeof data === "string"
        ? data
              .replace(/\n/g, " ")
              .replace(/[éÉěĚèêëÈÊË]/g, "e")
              .replace(/[šŠ]/g, "s")
              .replace(/[čČçÇ]/g, "c")
              .replace(/[řŘ]/g, "r")
              .replace(/[žŽ]/g, "z")
              .replace(/[ýÝ]/g, "y")
              .replace(/[áÁâàÂÀ]/g, "a")
              .replace(/[íÍîïÎÏ]/g, "i")
              .replace(/[ťŤ]/g, "t")
              .replace(/[ďĎ]/g, "d")
              .replace(/[ňŇ]/g, "n")
              .replace(/[óÓ]/g, "o")
              .replace(/[úÚůŮ]/g, "u")
        : data;
}
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "portugues-pre": function(data) {
        var a = "a";
        var e = "e";
        var i = "i";
        var o = "o";
        var u = "u";
        var c = "c";
        var special_letters = {
            Á: a,
            á: a,
            Ã: a,
            ã: a,
            À: a,
            à: a,
            É: e,
            é: e,
            Ê: e,
            ê: e,
            Í: i,
            í: i,
            Î: i,
            î: i,
            Ó: o,
            ó: o,
            Õ: o,
            õ: o,
            Ô: o,
            ô: o,
            Ú: u,
            ú: u,
            Ü: u,
            ü: u,
            ç: c,
            Ç: c
        };
        for (var val in special_letters)
            data = data
                .split(val)
                .join(special_letters[val])
                .toLowerCase();
        return data;
    },
    "portugues-asc": function(a, b) {
        return a < b ? -1 : a > b ? 1 : 0;
    },
    "portugues-desc": function(a, b) {
        return a < b ? 1 : a > b ? -1 : 0;
    }
});

$(document).ready(function() {
    jQuery("#datatable-table_filter input").keyup(function() {
        table
            .search(jQuery.fn.DataTable.ext.type.search.string(this.value))
            .draw();
    });
    $(document).ready(function() {});

    $("#tablefaq").dataTable({
        dom: "lBfrtip",
        scrollY: "500",
        orderCellsTop: true,
        searchHighlight: true,
        mark: true,
        scrollCollapse: true,
        autoWidth: true,
        columns: [null, null, null, { orderable: false }],
        order: [[0, "asc"]],
        language: {
            emptyTable: "Não existem registos a apresentar",
            info: "A mostrar _START_ até _END_ de _TOTAL_ registos",
            infoEmpty: "",
            sSearch: "Procurar:",
            paginate: {
                next: "Próximo",
                previous: "Anterior"
            },
            sLengthMenu: "Mostrar _MENU_ registos",
            infoFiltered: "(filtrado do total de _MAX_ registos)",
            zeroRecords: "Não existem resultados baseados na pesquisa"
        },
        columnDefs: [
            {
                type: "portugues",
                targets: [0, 1, 2, 3],
                targets: [3],
                orderable: false,
                targets: [0, 1],
                render: function(data, type) {
                    return type === "display" && data.length > 10
                        ? data.substr(0, 40) + "…"
                        : data;
                }
            }
        ],
        columnDefs: [
            {
                type: "locale-compare",
                targets: [0, 1, 2, 3],
                targets: [3],
                orderable: false,
                targets: [0, 1],
                
                render: function(data, type) {
                    return type === "display" && data.length > 10
                        ? data.substr(0, 40) + "…"
                        : data;
                }
            }
        ]
    });
});
$("#tablefaq thead tr")
    .clone(true)
    .appendTo("#tablefaq thead");
$("#tablefaq thead tr:eq(1) th").each(function(i) {
    var title = $(this).text();
    $(this).html(
        '<input type="text" class="form-control form-control-sm thead' +
            title +
            '" placeholder="Pesquisar ' +
            title +
            '" />'
    );

    $("input", this).on("keyup change", function() {
        if (
            $("#tablefaq")
                .DataTable()
                .column(i)
                .search() !== this.value
        ) {
            $("#tablefaq")
                .DataTable()
                .column(i)
                .search(this.value)
                .draw();
        }
    });
});
