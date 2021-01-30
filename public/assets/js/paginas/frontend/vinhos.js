$('.ui.accordion')
  .accordion({
    exclusive: false
  })
;
$('.ui.dropdown')
  .dropdown();
$('.ui.checkbox')
  .checkbox()
;
var categoryContent = [];
for (var i = 0; i < vinhos.length; i++) {
  categoryContent.push({ category: 'Vinhos', title: vinhos[i]})
}
for (var i = 0; i < vinhos_categorias.length; i++) {
  categoryContent.push({ category: 'Categorias', title: vinhos_categorias[i]})
}
for (var i = 0; i < vinhos_produtores.length; i++) {
  categoryContent.push({ category: 'Produtores', title: vinhos_produtores[i]})
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

;
