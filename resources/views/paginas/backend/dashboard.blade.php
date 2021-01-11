@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">{{$totalUsers}}</h2>
            <p>Registos Totais (2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="usersmenu-open" />
              <label class="menu-open-button" for="usersmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updateusersChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updateusersChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updateusersChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updateusersChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="usersgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">{{$totalProdutores}}</h2>
            <p>Produtores Totais(2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="produtoresmenu-open" />
              <label class="menu-open-button" for="produtoresmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updateprodutoresChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updateprodutoresChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updateprodutoresChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updateprodutoresChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="produtoresgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">71,503</h2>
            <p>Nadinha</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="comprasmenu-open" />
              <label class="menu-open-button" for="comprasmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updatecomprasChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updatecomprasChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updatecomprasChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updatecomprasChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="comprasgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">{{$totalProds}}</h2>
            <p>Produtos Totais (2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="prodsmenu-open" />
              <label class="menu-open-button" for="prodsmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updateprodsChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updateprodsChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updateprodsChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updateprodsChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="prodsgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>



    <h2 class="titulo">Tabelas</h2>
    <div class="row tabelas">
      <div class="col-12">
        <div class="card card-table-border-none" id="users">
          <div class="card-header justify-content-between">
            <h2 id="titulotable">Tabela de Utilizadores</h2>
            <div class="table-real-menu-rep">
              <button title="Utilizadores" id="btnusers-rep"" value=" Utilizadores" class="table-menu-item-repos"> <i id="table-users" class="fa fa-users"></i> </button>
              <button title="Produtores" id="btnprodutores-rep" value="Produtores" class="table-menu-item-repos"> <i id="table-produtores" class="fas fa-user-tie"></i> </button>
              <button title="Produtos" id="btnprods-rep"" value=" Produtos" class="table-menu-item-repos"> <i id="table-produtos" class="fas fa-shipping-fast"></i> </button>
              <button title="Produtos(WordPress)" id="btnprods_wp-rep" value="Loja" class="table-menu-item-repos"> <i id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
              <!--  <button title="Compras" id="btncompras-rep"" value="Loja" class="table-menu-item-repos"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button> -->
            </div>
            <nav class="table-item-menu">
              <input type="checkbox" href="#" class="table-menu-open" name="table-menu-open" id="table-menu-open" />
              <label id="table-menu-open-handler" class="table-menu-open-button" for="table-menu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <div class="table-real-menu">
                <button title="Utilizadores" id="btnusers" value="Utilizadores" class="table-menu-item"> <i id="table-users" class="fa fa-users"></i> </button>
                <button title="Produtores" id="btnprodutores" value="Produtores" class="table-menu-item"> <i id="table-produtores" class="fas fa-user-tie"></i> </button>
                <button title="Produtos" id="btnprods" value="Produtos" class="table-menu-item"> <i id="table-produtos" class="fas fa-shipping-fast"></i> </button>
                <button title="Produtos(WordPress)" id="btnprods_wp" value="Loja" class="table-menu-item"> <i id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
                <!-- <button title="Compras" id="btncompras" value="Loja" class="table-menu-item"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button> -->
              </div>
            </nav>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tableausers" class="ui celled table" style="width:100%">
              <thead id="tableausersthead">
                <tr>
                  <th>ID</th>
                  <th class="d-none d-lg-table-cell">Imagem</th>
                  <th>Nome</th>
                  <th class="d-none d-lg-table-cell">Apelido</th>
                  <th class="d-none d-lg-table-cell">Email</th>
                  <th class="d-none d-lg-table-cell">Tipo de Utilizador</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($users as $key => $user)
                  <td>{{$user->id}}</td>
                  <td>
                    @if ($user->img == "Sem Imagem")
                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle w-45" alt=">{{$user->name}} {{$user->apelido}}">
                    @else
                    <img src="/assets/img/users/{{$user->img}}" class="rounded-circle w-45" alt=">{{$user->name}} {{$user->apelido}}">
                    @endif
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$user->name}}</a>
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$user->apelido}}</a>
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$user->email}}</a>
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$user->tipouser}}</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <table id="tableaprodutores" class="ui celled table" style="width:100%">
              <thead id="tableprodutoresthead">
                <tr>
                <th class="d-none d-lg-table-cell">ID</th>
                  <th class="d-none d-lg-table-cell">Imagem</th>
                  <th class="d-none d-lg-table-cell">Nome</th>
                  <th class="d-none d-lg-table-cell">Apelido</th>
                  <th class="d-none d-lg-table-cell">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($produtores as $key => $produtor)
                  <td>{{$produtor->id}}</td>
                  <td>
                    @if ($produtor->img == "Sem Imagem")
                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle w-45" alt=">{{$produtor->name}} {{$produtor->apelido}}">
                    @else
                    <img src="/assets/img/users/{{$produtor->img}}" class="rounded-circle w-45" alt=">{{$produtor->name}} {{$produtor->apelido}}">
                    @endif
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$produtor->name}}</a>
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$produtor->apelido}}</a>
                  </td>
                  <td class="d-none d-lg-table-cell">{{$produtor->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <table id="tableaprods_wp" class="ui celled table" style="width:100%">
              <thead id="tableaprods_wpthead">
                <tr>
                  <th>ID</th>
                  <th>Imagem</th>
                  <th>Titulo</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($prosdwp as $key => $prodwp)
                  <td target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->ID}}</td>
                  <td>
                    @foreach($prodsimg as $key => $prodimg)
                      @if ($prodwp->ID == $prodimg->post_parent)
                        <img style="width: 50px; height: 50px; object-fit: cover;" src="{{$prodimg->guid}}" class="rounded-circle w-45" alt="{{$prodwp->post_title}}">
                      @endif
                    @endforeach
                </td>
                  <td>
                    <a class="text-dark" target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->post_title}}</a>
                  </td>
                  <td class="tprodswp_td_desc">
                    <a class="text-dark" target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->post_content}}</a>
                  </td>
                  @foreach($wp_prods as $key => $wp_prod)
                  @if ($wp_prod->post_id == $prodwp->ID)
                  <td>
                    <a class="text-dark" target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$wp_prod->meta_value}}€</a>
                  </td>
                  @foreach($wp_prodsStock as $key => $wp_prodStock)
                  @if ($wp_prodStock->post_id == $prodwp->ID)
                  @if ($wp_prodStock->meta_value == "instock")
                  <td class="prods_wp_stock_green">
                    <div class="prods_wp_green"><a target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">Em Stock</a></div>
                  </td>
                  @elseif ($wp_prodStock->meta_value == "onbackorder")
                  <td class="prods_wp_stock_yellow">
                    <div class="prods_wp_yellow"><a target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">Por Encomenda</a></div>
                  </td>
                  @else
                  <td class="prods_wp_stock_red">
                    <div class="prods_wp_red"><a target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$prodwp->ID}}">Esgotado</a></div>
                  </td>
                  @endif
                  @endif
                  @endforeach
                  @endif
                  @endforeach
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <h2 class="titulo">Chat</h2>
    <div class="card card-default mb-0 chat">
      <div class="row bg-white no-gutters chat">
        <div class="col-lg-4">
          <!-- Chat Left Side -->
          <div class="chat-left-side">

            <div class="chatheader">
              <h2>WINECHAT</h2>
            </div>

            <ul class="list-unstyled border-top mb-0" id="chat-left-content">
              @foreach($mensagens as $key => $mensagem)
              <li>
                @foreach($users as $key => $user)
                @if ($user->id == $mensagem->id_envio)
                <a id="chatact-{{$user->id}}" class="media media-message" style="width: 100%; height: 100%; z-index: 5;">
                  @endif
                  @endforeach
                  <div class="position-relative mr-3">
                    @foreach($users as $key => $user)
                    @if ($user->id == $mensagem->id_envio)
                    @if ($user->img == "Sem Imagem")
                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle" alt="Avatar Image">
                    @else
                    <img src="/assets/img/users/{{$user->img}}" class="rounded-circle" alt="Avatar Image">
                    @endif
                    @endif
                    @endforeach
                  </div>
                  <div class="media-body d-flex justify-content-between" style="pointer-events: none;">
                    <div class="message-contents">
                      <h4 class="title">
                        @foreach($users as $key => $user)
                        @if ($user->id == $mensagem->id_envio)
                        {{$user->name}} {{$user->apelido}}
                        @endif
                        @endforeach
                      </h4>
                    </div>
                    <span class="date">Clique para abrir</span>
                  </div>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-7 col-xl-8">
          <!-- Chats -->
          <div class="chat-right-side">
            <div style=" height: 91px;" class="media media-chat align-items-center mb-0 media-chat-header" href="#">
              <div class="media-body w-100">
                <div class="d-flex justify-content-between align-items-center">
                  @foreach($itens as $key => $iten)
                  @foreach($users as $key => $user)

                  @if ($user->id == $iten->id_envio || $user->id == $iten->id_envio)

                  @if ($user->id == $iten->id_envio)
                  <div style="align-items: center; " class="media media-chat media-left mb-0 chatact-{{$iten->id_envio}}">

                    @if ($user->id == $iten->id_envio)
                    @if ($user->img == "Sem Imagem")

                    <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">

                    @else
                    <img src="/assets/img/users/{{$user->img}}" class="rounded-circle mr-3" alt="Avatar Image">
                    @endif
                    @endif

                    <h3 class="heading-title mb-0"><a href="#">{{$user->name}} {{$user->apelido}}</a></h3>
                  </div>
                  @endif
                  @endif
                  @endforeach
                  @endforeach
                </div>
              </div>
            </div>
            <div class="chat-right-content" id="chat-right-content" data-simplebar="init">
              <div class="simplebar-wrapper" style="margin: -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div style="margin-bottom: 50px;" class="simplebar-mask">
                  <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                      <div class="simplebar-content" style="padding: 24px;">
                        @foreach($itens as $key => $iten)
                        @foreach($mensagens_chat as $key => $chat)

                        @if ($chat->id_envio == $iten->id_envio || $chat->id_destino == $iten->id_envio)

                        @if ($chat->id_envio == $iten->id_envio)
                        <div class="media media-chat media-left chatact-{{$iten->id_envio}}">
                          @foreach($users as $key => $user)
                          @if ($user->id == $iten->id_envio)
                          @if ($user->img == "Sem Imagem")
                          <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">
                          @else
                          <img src="/assets/img/users/{{$user->img}}" class="rounded-circle mr-3" alt="Avatar Image">
                          @endif
                          @endif
                          @endforeach
                          <div class="media-body">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{$chat->created_at}}</div>
                          </div>
                        </div>
                        @endif
                        @if ($chat->id_envio == $id_user_auth)
                        <div class="media media-chat media-right chatact-{{$iten->id_envio}}">
                          <div class="media-body">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{$chat->created_at}}</div>
                          </div>
                          @if (Auth::user()->img == "Sem Imagem")
                          <img src="/assets/img/users/sem_imagem.jpg" class="rounded-circle mr-3" alt="Avatar Image">
                          @else
                          <img class="rounded-circle ml-3" src="/assets/img/users/{{Auth::user()->img}}" alt="Image">
                          @endif
                        </div>
                        @endif
                        @endif

                        @endforeach
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 50px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
              </div>
            </div>
            @foreach($itens as $key => $iten)
            @foreach($users as $key => $user)

            @if ($user->id == $iten->id_envio || $user->id == $iten->id_envio)

            @if ($user->id == $iten->id_envio)
            <form method="POST" class="media media-left px-5 pb-3 chatact-{{$iten->id_envio}}" action="{{route('mensagens_backend_store')}}">
              {{ csrf_field() }}
              <input type="hidden" name="id_destino" value="{{$user->id}}">
              <input type="text" name="mensagem" class="form-control mb-3" placeholder="Escreva a sua resposta....">

            </form>
            @endif
            @endif
            @endforeach
            @endforeach
            </form>
          </div>

        </div>
      </div>
    </div>

    <h2 class="titulo">Ultimos Registos</h2>
    <div class="row ultusers">
      @foreach($ultimos_users as $key => $ultuser)

      <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-6">
          <div class="card-body text-center p-4">
            <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
              <div class="image mb-3 mt-n9">
                @if ($ultuser->img == "Sem Imagem")
                <img style="width: 100px; height:100px;" src="/assets/img/users/sem_imagem.jpg" class="img-fluid rounded-circle" alt="{{$ultuser->name}} {{$ultuser->apelido}}">
                @else
                <img style="object-fit: cover;" src="/assets/img/users/{{$ultuser->img}}" class="img-fluid rounded-circle" alt="{{$ultuser->name}} {{$ultuser->apelido}}">
                @endif
              </div>

              <h5 class="card-title text-dark">{{$ultuser->name}} {{$ultuser->apelido}}</h5>

              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-calendar-check mr-1"></i>
                  <span>Data de Registo: {{ date('d-m-Y', strtotime($ultuser->created_at))}} </span>
                </li>
                <li class="d-flex">
                  <i class="mdi mdi-email mr-1"></i>
                  <span>{{$ultuser->email}}</span>
                </li>
              </ul>
            </a>
            <div class="row justify-content-center">
              <div class="col-4 px-1">
                @php $iposts = 0; @endphp
                @foreach($total_posts as $key => $post)
                @if ($post->id_user == $ultuser->id)
                @php ++$iposts @endphp
                @endif
                @endforeach
                @php $percentagemposts = ($iposts*100)/$total_posts_count @endphp
                @php $percentagemposts = round($percentagemposts, 0) @endphp
                <div class=" circle" data-size="60" data-value="0.<?php echo $percentagemposts; ?>" data-thickness="4" data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">posts</h6>
                    <h6><?php echo $percentagemposts; ?>%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
              <div class="col-4 px-1">
                @php $ireceitas = 0; @endphp
                @foreach($total_receitas as $key => $receita)
                @if ($receita->id_user == $ultuser->id)
                @php ++$ireceitas @endphp
                @endif
                @endforeach
                @php $percentagemreceitas = ($ireceitas*100)/$total_receitas_count @endphp
                @php $percentagemreceitas = round($percentagemreceitas, 0) @endphp
                <div class=" circle" data-size="60" data-value="0.<?php echo $percentagemreceitas; ?>" data-thickness="4" data-fill="{
                  &quot;color&quot;: &quot;#fec400&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">rceitas</h6>
                    <h6><?php echo $percentagemreceitas; ?>%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class=" circle" data-size="60" data-value="0.90" data-thickness="4" data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">class</h6>
                    <h6>25%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      @endforeach
    </div>

    <h2 class="titulo">Ultimas Categorias Criadas</h2>
    <div class="row ultusers">
      @foreach($ultimas_categorias as $key => $categoria)

      <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-6">
          <div class="card-body text-center p-4">
            <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
              <div class="image mb-3 mt-n9">
                <img style="object-fit: cover; width: 100px; height:100px;" src="/assets/img/categorias/{{$categoria->img}}" class="img-fluid rounded-circle" alt="{{$categoria->name}}">
              </div>

              <h5 class="card-title text-dark">{{$categoria->name}}</h5>

              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-calendar-check mr-1"></i>
                  <span>Data de Criação: {{ date('d-m-Y', strtotime($categoria->created_at))}} </span>
                </li>
              </ul>
            </a>
            <div class="row justify-content-center">
              <div class="col-4 px-1">
                @php $iposts = 0; @endphp
                @foreach($total_posts as $key => $post)
                @if ($post->id_categoria == $categoria->id)
                @php ++$iposts @endphp
                @endif
                @endforeach
                @php $percentagemposts = ($iposts*100)/$total_posts_count @endphp
                @php $percentagemposts = round($percentagemposts, 0) @endphp
                <div class=" circle" data-size="60" data-value="0.<?php echo $percentagemposts; ?>" data-thickness="4" data-fill="{
                    &quot;color&quot;: &quot;#35D00E&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">posts</h6>
                    <h6><?php echo $percentagemposts; ?>%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>


    <h2 class="titulo">Ultimas Categorias de Vinho Criadas</h2>
    <div class="row ultusers">
      @foreach($ultimas_categorias_vinhos as $key => $categoria_vinho)

      <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-6">
          <div class="card-body text-center p-4">
            <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
              <div class="image mb-3 mt-n9">
                <img style="object-fit: cover; width: 100px; height:100px;" src="/assets/img/vinhos/{{$categoria_vinho->img}}" class="img-fluid rounded-circle" alt="{{$categoria_vinho->nome}}">
              </div>

              <h5 class="card-title text-dark">{{$categoria_vinho->nome}}</h5>

              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-calendar-check mr-1"></i>
                  <span>Data de Criação: {{ date('d-m-Y', strtotime($categoria_vinho->created_at))}} </span>
                </li>
              </ul>
            </a>
            <div class="row justify-content-center">
              <div class="col-4 px-1">
                @php $ireceitas = 0; @endphp
                @foreach($total_receitas as $key => $receita)
                @if ($receita->id_categoria == $categoria_vinho->id)
                @php ++$ireceitas @endphp
                @endif
                @endforeach
                @php $percentagemreceitas = ($ireceitas*100)/$total_receitas_count @endphp
                @php $percentagemreceitas = round($percentagemreceitas, 0) @endphp
                <div class=" circle" data-size="60" data-value="0.<?php echo $percentagemreceitas; ?>" data-thickness="4" data-fill="{
                  &quot;color&quot;: &quot;#fec400&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">rceitas</h6>
                    <h6><?php echo $percentagemreceitas; ?>%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>


    <h2 class="titulo">Ultimos Produtos Adicionados</h2>
    <div class="row ultusers">
      @foreach($total_produtoswp as $key => $produtoswp)

      <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-6">
          <div style="height: 305px;" class="card-body text-center p-4">
            <a  target="_blank" href="http://wineculture.test/?post_type=product&#038;p={{$produtoswp->ID}}" class="text-secondary d-inline-block mb-3">
              <div class="image mb-3 mt-n9">
              @foreach($prodsimg as $key => $prodimg)
              @if ($produtoswp->ID == $prodimg->post_parent)
                <img style="width: 100px; height:100px; object-fit: cover;" src="{{$prodimg->guid}}" class="img-fluid rounded-circle" alt="{{$produtoswp->post_title}}">
                @endif
                @endforeach
              </div>
              <h6 style="width: 100%;" class="card-title text-dark">{{$produtoswp->post_title}}</h6>
              <ul class="list-unstyled">
                <li class="d-flex mb-1">
                  <i class="mdi mdi-calendar-check mr-1"></i>
                  <span>Data de Criação: {{ date('d-m-Y', strtotime($produtoswp->post_date))}}</span>
                </li>
              </ul>
            </a>
            <p class="card-text text-center mb-3">{{$produtoswp->post_content}}</p>
            <div class="row justify-content-center">
              <div class="col-4 px-1">
                @php $ireceitas = 0; @endphp

                <div class=" circle" data-size="60" data-value="0.<?php echo $percentagemreceitas; ?>" data-thickness="4" data-fill="{
                  &quot;color&quot;: &quot;#1E90FF&quot;
													}">
                  <div class="circle-content">
                    <h6 class="text-uppercase">rceitas</h6>
                    <h6><?php echo $percentagemreceitas; ?>%</h6>
                    <strong></strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  <script>
 var totalUsersJan = {{$totalUsersJan}};
    var totalUsersFev = {{$totalUsersFev}};
    var totalUsersMar = {{$totalUsersMar}};
    var totalUsersAbr = {{$totalUsersAbr}};
    var totalUsersMai = {{$totalUsersMai}};
    var totalUsersJun = {{$totalUsersJun}};
    var totalUsersJul = {{$totalUsersJul}};
    var totalUsersAgo = {{$totalUsersAgo}};
    var totalUsersSet = {{$totalUsersSet}};
    var totalUsersOut = {{$totalUsersOut}};
    var totalUsersNov = {{$totalUsersNov}};
    var totalUsersDez = {{$totalUsersDez}};

    var totalProdutoresJan = {{$totalProdutoresJan}};
    var totalProdutoresFev = {{$totalProdutoresFev}};
    var totalProdutoresMar = {{$totalProdutoresMar}};
    var totalProdutoresAbr = {{$totalProdutoresAbr}};
    var totalProdutoresMai = {{$totalProdutoresMai}};
    var totalProdutoresJun = {{$totalProdutoresJun}};
    var totalProdutoresJul = {{$totalProdutoresJul}};
    var totalProdutoresAgo = {{$totalProdutoresAgo}};
    var totalProdutoresSet = {{$totalProdutoresSet}};
    var totalProdutoresOut = {{$totalProdutoresOut}};
    var totalProdutoresNov = {{$totalProdutoresNov}};
    var totalProdutoresDez = {{$totalProdutoresDez}};

    var totalProdsJan = {{$totalProdsJan}};
    var totalProdsFev = {{$totalProdsFev}};
    var totalProdsMar = {{$totalProdsMar}};
    var totalProdsAbr = {{$totalProdsAbr}};
    var totalProdsMai = {{$totalProdsMai}};
    var totalProdsJun = {{$totalProdsJun}};
    var totalProdsJul = {{$totalProdsJul}};
    var totalProdsAgo = {{$totalProdsAgo}};
    var totalProdsSet = {{$totalProdsSet}};
    var totalProdsOut = {{$totalProdsOut}};
    var totalProdsNov = {{$totalProdsNov}};
    var totalProdsDez = {{$totalProdsDez}};
  </script>
  <script src="{{ asset('assets\js\paginas\backend\dashboard.js') }}"></script>
  @endsection