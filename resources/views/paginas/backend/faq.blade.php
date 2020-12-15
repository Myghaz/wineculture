@extends ('layouts.backend.admin')
@section('title', 'FAQ')
    <div class="row">
        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="users">
                <div class="card-header justify-content-between">
                    <h2>Tabela de FAQ</h2>
                    <nav class="table-item-menu">
                        <input type="checkbox" href="#" class="table-menu-open" name="table-menu-open"
                            id="table-menu-open" />
                        <label id="table-menu-open-handler" class="table-menu-open-button" for="table-menu-open">
                            <span class="lines line-1"></span>
                            <span class="lines line-2"></span>
                            <span class="lines line-3"></span>
                        </label>
                        <div class="table-real-menu">
                            <button title="Utilizadores" id="btnusers" value="Utilizadores" class="table-menu-item"> <i
                                    id="table-users" class="fa fa-users"></i> </button>
                            <button title="Produtores" id="btnprodutores" value="Produtores" class="table-menu-item"> <i
                                    id="table-produtores" class="fas fa-user-tie"></i> </button>
                            <button title="Produtos" id="btnprods" value="Produtos" class="table-menu-item"> <i
                                    id="table-produtos" class="fas fa-shipping-fast"></i> </button>
                            <button title="Produtos(WordPress)" id="btnprods(wp)" value="Loja" class="table-menu-item"> <i
                                    id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
                            <button title="Compras" id="btncompras" value="Loja" class="table-menu-item"> <i
                                    id="table-compras" class="fa fa-dollar-sign"></i> </button>
                        </div>
                    </nav>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table id="tableausers" class="ui celled table" style="width:100%">
                    </table>
                    <table id="tableproutores" class="ui celled table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-none d-lg-table-cell">Pergunta</th>
                                <th class="d-none d-lg-table-cell">Resposta</th>
                                <th class="d-none d-lg-table-cell">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($perguntas as $pergunta)
                                    <td>{{ $pergunta->id }}-2</td>
                                    <td>
                                        <a class="text-dark" href="">{{ $pergunta->pergunta }}2</a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="">{{ $pergunta->resposta }}2</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">{{ $pergunta->categoria }}2</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@section('content')
