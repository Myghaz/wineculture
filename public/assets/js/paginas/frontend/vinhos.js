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
        clearable: true,
        error: {
            source: 'Sem Resultados',
            noResults: 'Sem Resultados'
        }
    })
$('.baixo')
    .popup({});
$('.direita')
    .popup({});
$('.ordenacao')
    .popup({});
$('#refreshvinhos')
    .popup({});
$('.pesquisaricon')
    .popup({});
$(".reporfiltros").hide();
$('.ui.accordion')
    .accordion({
        exclusive: false
    });
$('.ui.dropdown')
    .dropdown();
$('.ui.checkbox')
    .checkbox();
$(document).on("click", ".direita", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapeimgs' + id_vinho).shape('flip right');
})
$(document).on("click", ".baixo", function () {
    var id_vinho = $(this).parent().parent().find("#id_vinho").val();
    $('.shapedetalhes' + id_vinho).shape('flip down');
})

$(document).on('click', '.deletefiltro', function () {
    var sections = $('.columnvinho');
    $('.categoriacheckb').val($(this).is(':checked'));
    var checked = $(".filtroschecks :checkbox:checked");
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
$(document).on("click", ".reporfiltros", function () {
    $('.columnvinho').show("slow", function showPrevious() {
        $(this).next("div").show("slow", showPrevious);
        $(".reporfiltros").hide();
    });
    $(".selectfiltros").detach();
    $(".categoriacheckb").prop("checked", false);
});
$(document).on("change", ".categoriacheckb", function () {
    var checked = $(".filtroschecks :checkbox:checked");
    var sections = $('.columnvinho');
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
    var input = document.getElementById("intpesquisa");
    input = input.value.toLowerCase();
    var divs = document.getElementsByClassName('columnvinho');
    var checks = $(".categoriacheckb");
    for (i = 0; i < divs.length; i++) {
        if (divs[i].innerText.toLowerCase().includes(input)) {
            divs[i].style.display = "inline-block";
        } else {
            divs[i].style.display = "none";
        }
    }
    var valThis = $(this).val().toLowerCase();
    $('input[type=checkbox]').each(function () {
        var text = $(this).attr('id').toLowerCase();
        (text.indexOf(valThis) == 0) ? $(this).prop("checked", true): $(this).prop("checked", false);
        if (valThis == "") {
            $('input[type=checkbox]').prop("checked", false)
        }
    });
    $('input[type=search]').on('search', function () {
        $('input[type=checkbox]').prop("checked", false)
    });
});
// Search clear button

$(document).on("click", ".pesquisaricon", function () {
    var input = document.getElementById("intpesquisa");
    input = input.value.toLowerCase();
    var divs = document.getElementsByClassName('columnvinho');

    for (i = 0; i < divs.length; i++) {
        if (divs[i].innerText.toLowerCase().includes(input)) {
            divs[i].style.display = "inline-block";
        } else {
            divs[i].style.display = "none";
        }
    }
});

$(window).on('load', function () {
    $(".listavinhos").css("animation", "0.8s ease-in-out 0s 1 listavinhos")
    $(".banner").css("animation", "0.8s ease-in-out 0s 1 banner")
    $(".maincontainer").css("animation", "0.8s ease-in-out 0s 1 maincontainer")
    $(".filtrosmain").css("animation", "0.8s ease-in-out 0s 1 filtrosmain")
});
