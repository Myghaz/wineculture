
@foreach ($vinhos as $key=>$vinho)
<div name="vinhocol" class="column columnvinho categoria{{$vinho->categoria->nome}} produtor{{$vinho->id_produtor}}">
    <div class="ui cube shape shapevinho shapeimgs{{$vinho->id}}">
        <input type="hidden" id="id_vinho" value="{{$vinho->id}}">
        <div class="sides">
            <div class="side active shapevinho">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho->img) }}" alt="{{$vinho->nome}}">
            </div>
            @foreach ($vinhos_img as $key=>$vinho_img)
            @if ($vinho_img->id_vinho == $vinho->id)
            <div class="side sideimg">
                <img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho_img->img) }}" alt="{{$vinho->nome}}">
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

    <div class="ui cube shape shapedetalhes shapedetalhes{{$vinho->id}}">
        <input type="hidden" id="id_vinho" value="{{$vinho->id}}">
        <div class="sides sidesdetalhes">
            <div class="side active">
                <div class="nomevinho">
                    {{$vinho->nome}}
                </div>
            </div>
            <div class="side categoriavinhoside">

                {{$vinho->categoria->nome}}

            </div>
            <div class="side produtorvinhoside">

                {{$vinho->produtor->name}} {{$vinho->produtor->apelido}}

            </div>
        </div>
    </div>
</div>
@endforeach
<div class="pagination">
    {!! $vinhos->links() !!}
</div>
<script src="{{ URL::asset('assets/js/includes/frontend/listavinhos.js') }}"></script>