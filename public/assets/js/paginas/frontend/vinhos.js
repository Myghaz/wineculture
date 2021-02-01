$(".reporfiltros").hide();
$('.ui.accordion')
    .accordion({
        exclusive: false
    });
$('.ui.dropdown')
    .dropdown();
$('.ui.checkbox')
    .checkbox();

$(".direita").on("click", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapeimgs' + id_vinho).shape('flip right');
})
$(".baixo").on("click", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapedetalhes' + id_vinho).shape('flip down');
})
var categoryContent = [];
for (var i = 0; i < vinhos.length; i++) {
    categoryContent.push({
        category: 'Vinhos',
        title: vinhos[i]
    })
}
for (var i = 0; i < vinhos_categorias.length; i++) {
    categoryContent.push({
        category: 'Categorias',
        title: vinhos_categorias[i]
    })
}
for (var i = 0; i < vinhos_produtores.length; i++) {
    categoryContent.push({
        category: 'Produtores',
        title: vinhos_produtores[i]
    })
}
$('.ui.search')

    .search({

        type: 'category',
        source: categoryContent,
        fullTextSearch: false,
        error: {
            source: 'Sem Resultados',
            noResults: 'Sem Resultados'
        }
    })
$("#refreshvinhos").on("click", function () {
    $(this).addClass("animacao");
    setTimeout(function () {
        $("#refreshvinhos").removeClass("animacao")
    }, 1000);
});;
$('.categoriacheckb').val($(this).is(':checked'));
var checked = $(".filtroschecks :checkbox:checked");
$(document).on('click', '.deletefiltro', function () {
    var classcat = "#categoria";
    var eliminarcat = $(this).attr("id");
    var eliminarcategorias = classcat.concat(eliminarcat);
    $(eliminarcategorias).detach();
    var idd = "#";
    var deletecatt = idd.concat(eliminarcat);
    $(deletecatt).prop("checked", false);
    var checked = $(".filtroschecks :checkbox:checked");
    if (checked.length) {
        sections.hide();
        checked.each(function () {
            $("." + $(this).attr("name")).show("fast", function showNext() {
                $("." + $(this).attr("name")).show("fast", showNext);
            });
        });
    } else {
        sections.show("slow", function showPrevious() {
            $(this).next("div").show("slow", showPrevious);
            $(".reporfiltros").hide();
        });
    }
});
$(".reporfiltros").on("click", function () {
    $('.columnvinho').show("slow", function showPrevious() {
        $(this).next("div").show("slow", showPrevious);
        $(".reporfiltros").hide();
    });
    $(".selectfiltros").detach();
    $(".categoriacheckb").prop("checked", false);
});;
var sections = $('.columnvinho');
var countfil = 0;
$('.categoriacheckb').on("change", function () {
    var checked = $(".filtroschecks :checkbox:checked");
    if (checked.length) {
        sections.hide();
        $(".reporfiltros").show();
        checked.each(function () {

            $("." + $(this).attr("name")).show("fast", function showNext() {
                $("." + $(this).attr("name")).show("fast", showNext);
            });
        });

    } else {
        sections.show("slow", function showPrevious() {
            $(this).next("div").show("slow", showPrevious);
            $(".reporfiltros").hide();
        });
    }
    if ($(this).is(":checked")) {
        var addcategoriasfiltro = ($(this).attr("id"))
        var addcategoriasfiltronome = ($(this).next('.catenome').text())
        $(".itemfiltros").append('<a id="categoria' + addcategoriasfiltro + '" class="ui image label selectfiltros">' + addcategoriasfiltronome + '<i id="' + addcategoriasfiltro + '" class="delete icon deletefiltro"></i></a>');
    } else {
        var classcat = "#categoria";
        var dacategoriasfiltro = $(this).attr("id");
        var delacategoriasfiltro = classcat.concat(dacategoriasfiltro);
        $(delacategoriasfiltro).detach();
    }
});
$("#intpesquisa").on("change paste keyup", function () {

});
