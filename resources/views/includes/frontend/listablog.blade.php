@foreach ($category as $key=>$categories)
<div name="vinhocol" class="column columnvinho categoria{{$categories->categoria->nome}} produtor{{$categories->id_produtor}}">
    <div class="ui cube shape shapevinho shapeimgs{{$categories->id}}">
        <input type="hidden" id="id_vinho" value="{{$categories->id}}">
        <div class="sides">
            <div class="side active shapevinho">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$categories->img) }}" alt="{{$categories->nome}}">
            </div>
            @foreach ($categoriess_img as $key=>$categories_img)
            @if ($categories_img->id_vinho == $categories->id)
            <div class="side sideimg">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$categories_img->img) }}" alt="{{$categories->nome}}">
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="ui ignored icon direction buttons imgbtndown">
        <div class="ui icon button baixo" data-animation="flip" title="Próximo Detalhe" data-direction="right" title="Flip Right"><i class="down long arrow icon"></i></div>
    </div>
    <div class="ui ignored icon direction buttons imgbtnright">
        <div class="ui icon button direita" title="Próxima Imagem" data-animation="flip" data-direction="right" title="Flip Right"><i class="right long arrow icon"></i></div>
    </div>
    <div class="dividervinho"></div>

    <div class="ui cube shape shapedetalhes shapedetalhes{{$categories->id}}">
        <input type="hidden" id="id_vinho" value="{{$categories->id}}">
        <div class="sides sidesdetalhes">
            <div class="side active">
                <div class="nomevinho">
                    {{$categories->nome}}
                </div>
            </div>
            <div class="side categoriavinhoside">

                {{$categories->categoria->nome}}

            </div>
            <div class="side produtorvinhoside">

                {{$categories->produtor->name}} {{$categories->produtor->apelido}}

            </div>
        </div>
    </div>
</div>
@endforeach
<div class="pagination">
    {!! $blogss->links() !!}
</div>
