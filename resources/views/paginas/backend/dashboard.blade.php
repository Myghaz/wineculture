@extends ('layouts.backend.admin')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <!-- Top Statistics -->
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
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="users">
          <div class="card-header justify-content-between">
            <h2 id="titulotable">Tabela de Utilizadores</h2>
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
                <button title="Compras" id="btncompras" value="Loja" class="table-menu-item"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button>
              </div>
            </nav>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tableausers" class="ui celled table" style="width:100%">
              <thead id="tableausersthead">
                <tr>
                  <th>ID</th>
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
                  <th>ID</th>
                  <th>Nome</th>
                  <th class="d-none d-lg-table-cell">Apelido</th>
                  <th class="d-none d-lg-table-cell">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($produtores as $key => $produtor)
                  <td>{{$user->id}}</td>
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
                  <th>Titulo</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($prosdwp as $key => $prodwp)

                  <td target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->ID}}</td>
                  <td>
                    <a class="text-dark" target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->post_title}}</a>
                  </td>
                  <td class="tprodswp_td_desc">
                    <a class="text-dark" target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$prodwp->post_content}}</a>
                  </td>
                  @foreach($wp_prods as $key => $wp_prod)
                  @if ($wp_prod->post_id == $prodwp->ID)
                  <td>
                    <a class="text-dark" target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">{{$wp_prod->meta_value}}€</a>
                  </td>
                  @foreach($wp_prodsStock as $key => $wp_prodStock)
                  @if ($wp_prodStock->post_id == $prodwp->ID)
                  @if ($wp_prodStock->meta_value == "instock")
                  <td class="prods_wp_stock_green">
                    <div class="prods_wp_green"><a target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">Em Stock</a></div>
                  </td>
                  @elseif ($wp_prodStock->meta_value == "onbackorder")
                  <td class="prods_wp_stock_yellow">
                    <div class="prods_wp_yellow"><a target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">Por Encomenda</a></div>
                  </td>
                  @else
                  <td class="prods_wp_stock_red">
                    <div class="prods_wp_red"><a target="_blank" href="http://wineculturewp.test/?post_type=product&#038;p={{$prodwp->ID}}">Esgotado</a></div>
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
    <div class="row-socials">
      <div class="col-sm-6 col-lg-6">
        <div class="card">
          <a target="_blank" href="https://www.facebook.com/Testedwmwc-100224601998953">
            <div class="card-header bg-facebook content-center">
              <img src="/assets/img/paginas/backend/dashboard/facebook.png" class="c-icon c-icon-3xl text-white my-4">
            </div>
          </a>
          <div class="card-body row text-center">
            <div class="col">
              <div class="text-value-xl">{{$fbgostos}}</div>
              <div class="text-uppercase text-muted small">Gostos</div>
            </div>
            <div class="c-vr"></div>
            <div class="col">
              <div class="text-value-xl">{{$fbposts}}</div>
              <div class="text-uppercase text-muted small">Publicações</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6">
        <div class="card">
          <a target="_blank" href="https://www.instagram.com/wineculture.geral">
            <div class="card-header bg-instagram content-center">
              <img src="/assets/img/paginas/backend/dashboard/instagram.png" class="c-icon c-icon-3xl text-white my-4">
            </div>
          </a>
          <div class="card-body row text-center">
            <div class="col">
              <div class="text-value-xl">{{$seguidores_instagram}}</div>
              <div class="text-uppercase text-muted small">Seguidores</div>
            </div>
            <div class="c-vr"></div>
            <div class="col">
              <div class="text-value-xl">{{$posts_instagram}}</div>
              <div class="text-uppercase text-muted small">Publicações</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-default mb-0">
      <div class="row bg-white no-gutters chat">
        <div class="col-lg-4">
          <!-- Chat Left Side -->
          <div class="chat-left-side">

            <form class="chat-search">
              <input type="text" class="form-control" placeholder="Search...">
            </form>

            <ul class="list-unstyled border-top mb-0" id="chat-left-content">
              @foreach($mensagens as $key => $mensagem)
              <li>
              @foreach($users as $key => $user)
                    @if ($user->id == $mensagem->id_envio)
                  <a id="chatact-{{$user->id}}"  class="media media-message" style="width: 100%; height: 100%; z-index: 5;">
                  @endif
                  @endforeach
                  <div class="position-relative mr-3">
                    <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                    <span class="status away"></span>
                  </div>
                  <div class="media-body d-flex justify-content-between" style="pointer-events: none;">
                    <div  class="message-contents" >
                      <h4 class="title">
                        @foreach($users as $key => $user)
                        @if ($user->id == $mensagem->id_envio)
                        {{$user->name}} {{$user->apelido}}
                        @endif
                        @endforeach
                      </h4>
                      <p class="last-msg">{{$mensagem->mensagem}}.</p>
                    </div>
                    <span class="date">{{$mensagem->created_at }}</span>
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
            <div class="media media-chat align-items-center mb-0 media-chat-header" href="#">
              <img class="rounded-circle mr-3" src="assets/img/user/u2.jpg" alt="Image">
              <div class="media-body w-100">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="heading-title mb-0"><a href="#">Leon Battista</a></h3>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="user-profile.html">Profile</a>
                      <a class="dropdown-item" href="index.html">Logout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      


            <div class="chat-right-content" data-simplebar="init">
              <div class="simplebar-wrapper" style="margin: -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                  <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                      <div class="simplebar-content" id style="padding: 24px;">
                      @foreach($itens as $key => $iten)
                        @foreach($mensagens_chat as $key => $chat)
                       
                        @if ($chat->id_envio == $iten->id_envio || $chat->id_destino == $iten->id_envio)

                        @if ($chat->id_envio == $iten->id_envio)
                        <div class="media media-chat media-left chatact-{{$iten->id_envio}}">
                          <img class="rounded-circle mr-3" src="assets/img/user/u2.jpg" alt="Image">
                          <div class="media-body">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{$chat->created_at}}</div>
                            <script>
                            document.write(activechat);</script>
                          </div>
                        </div>
                        @endif
                        @if ($chat->id_envio == $id_user_auth)
                        <div class="media media-chat media-right chatact-{{$iten->id_envio}}">
                          <div class="media-body">
                            <p class="message">{{$chat->mensagem}}</p>
                            <div class="date-time">{{$chat->created_at}}</div>
                          </div>
                          <img class="rounded-circle ml-3" src="assets/img/user/u4.jpg" alt="Image">
                        </div>
                        @endif
                        @endif

                        @endforeach
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 586px;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 98px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
              </div>
            </div>
            

            <form class="px-5 pb-3">
              <input type="text" class="form-control mb-3" placeholder="Type your message here">
            </form>
          </div>

        </div>
      </div>
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

 
  @endsection