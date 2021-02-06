@extends("paginas.frontend.layout")

@section('title', $vinho_det->nome)

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinho_produto.css') }}">
@endsection

@section("content")

<div class="container" style="margin-top:100px">

  <div class="row">

  <div class="col-md-4 text-center">
      
  <div class="container_img">

<!-- Gallery -->
<div id="js-gallery" class="gallery">

  <!--Gallery Hero-->
  <div class="gallery__hero">
    <img src="\storage\vinhos\{{$vinho_det->img}}" style="width:100px" alt="vinho">
  </div>
  <!--Gallery Hero-->

  <!--Gallery Thumbs-->
  <div class="gallery__thumbs">
      <a href="\storage\vinhos\{{$vinho_det->img}}" style="width:40px" data-gallery="thumb" class="is-active">
        <img src="\storage\vinhos\{{$vinho_det->img}}">
      </a>
      <a href="\storage\vinhos\{{$vinho_det->img}}" style="width:40px" data-gallery="thumb">
        <img src="\storage\vinhos\{{$vinho_det->img}}">
      </a>
      <a href="\storage\vinhos\{{$vinho_det->img}}" style="width:40px" data-gallery="thumb">
        <img src="\storage\vinhos\{{$vinho_det->img}}">
      </a>
  </div>
  <!--Gallery Thumbs-->

</div><!--.gallery-->
<!-- Gallery -->

</div><!--.container-->

</div>
  <div class="col-md-8 mb-5">
    <h1 class="pro-d-title mb-4">
      {{$vinho_det->nome}}
    </h1>
    <p>
      {{$vinho_det->descricao}}
    </p>
    <div class="product_meta">
      <span class="posted_in"><strong>Categoria:</strong> <a rel="tag" href="#">
          {{$vinho_cat->nome}}
        </a></span>
      <span class="tagged_as"><strong>Região:</strong> <a rel="tag" href="#">
          {{$vinho_det->regiao}}
        </a></span>
      <span class="tagged_as"><strong>Produtor:</strong> <a rel="tag" href="#">
          {{$vinho_produtor->name}} 
          {{$vinho_produtor->apelido}}
        </a></span>
    </div>
    <div class="product_meta2">
      <span class="posted_in"><strong>Percentagem Álcool: </strong>{{$vinho_det->perct_alco}}%</span>
      <span class="posted_in"><strong>Quantidade CL: </strong>{{$vinho_det->qnt_cl}}CL</span>
    </div>
  </div>
</div>


@endsection

@section("javascript")
<script>
  var App = (function () {

//=== Use Strict ===//
'use strict';

//=== Private Variables ===//
var gallery = $('#js-gallery');

//=== Gallery Object ===//
var Gallery = {
  zoom: function(imgContainer, img) {
    var containerHeight = imgContainer.outerHeight(),
    src = img.attr('src');
    
    if ( src.indexOf('/products/normal/') != -1 ) {
      // Set height of container
      imgContainer.css( "height", containerHeight );
      
      // Switch hero image src with large version
      img.attr('src', src.replace('/products/normal/', '/products/zoom/') );
      
      // Add zoomed class to gallery container
      gallery.addClass('is-zoomed');
      
      // Enable image to be draggable
      img.draggable({
        drag: function( event, ui ) {
          ui.position.left = Math.min( 100, ui.position.left );
          ui.position.top = Math.min( 100, ui.position.top );
        }
      });
    } else {
      // Ensure height of container fits image
      imgContainer.css( "height", "auto" );
      
      // Switch hero image src with normal version
      img.attr('src', src.replace('/products/zoom/', '/products/normal/') );
      
      // Remove zoomed class to gallery container
      gallery.removeClass('is-zoomed');
    }
  },
  switch: function(trigger, imgContainer) {
    var src = trigger.attr('href'),
    thumbs = trigger.siblings(),
    img = trigger.parent().prev().children();
    
    // Add active class to thumb
    trigger.addClass('is-active');
    
    // Remove active class from thumbs
    thumbs.each(function() {
      if( $(this).hasClass('is-active') ) {
        $(this).removeClass('is-active');
      }
    });

    // Reset container if in zoom state
    if ( gallery.hasClass('is-zoomed') ) {
      gallery.removeClass('is-zoomed');
      imgContainer.css( "height", "auto" );
    }

    // Switch image source
    img.attr('src', src);
  }
};

//=== Public Methods ===//
function init() {

  // Listen for clicks on anchors within gallery
  gallery.delegate('a', 'click', function(event) {
    var trigger = $(this);
    var triggerData = trigger.data("gallery");

    if ( triggerData === 'zoom') {
      var imgContainer = trigger.parent(),
      img = trigger.siblings();
      Gallery.zoom(imgContainer, img);
    } else if ( triggerData === 'thumb') {
      var imgContainer = trigger.parent().siblings();
      Gallery.switch(trigger, imgContainer);
    } else {
      return;
    }

    event.preventDefault();
  });

}

//=== Make Methods Public ===//
return {
  init: init
};

})();

App.init();
</script>
@endsection