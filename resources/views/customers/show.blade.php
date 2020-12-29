@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Cliente</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inícios</a></li>
                            <li class="breadcrumb-item active">Clientes</li>
                            <li class="breadcrumb-item active">Cliente</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-6">
                <div class="card">

                    <div class="card-body" style="display: inline">
                        <div style="display: inline">
                            <h4 class="text-center mb-4 mt-4">Elton Cuambe</h4>
                        </div>

                        <div style="display: inline">
                            <small class="text-muted">Telefone</small>
                            <h6>820896638</h6>
                        </div>

                        <small class="text-muted">Email</small>
                        <h6>tadeumelembe@gmail.com</h6>

                        <small class="text-muted">BI</small>
                        <h6>42424242g</h6>

                        <small class="text-muted">Nacionalidade</small>
                        <h6>Moz</h6>

                        <small class="text-muted">Sexo</small>
                        <h6>Masculino</h6>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-6">
                <div class="card bg-white text-white-50">
                    <h3 class="card-title text-center my-4">Estatísticas</h3>
                    <div class="card-body" style="display: inline">

                        <div style="display: inline">
                            <small class="text-muted">Empréstimos</small>
                            <h6>4</h6>
                        </div>

                        <small class="text-muted">Parentes</small>
                        <h6>2</h6>
                        <div style="display: inline">
                            <small class="text-muted">Total concedido</small>
                            <h6>MT 20004</h6>
                        </div>

                        <small class="text-muted">Valor em dívida</small>
                        <h6>MT 3000</h6>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-3 d-none">
                <div class="card" style="height: 90%">

                    <div class="card-body">
                        <h4 class="text-center mb-4 mt-4">Elton Cuambe</h4>
                        <small class="text-muted pt-4 db">Phone</small>
                        <h6>820896638</h6>

                        <small class="text-muted">Email</small>
                        <h6>tadeumelembe@gmail.com</h6>

                        <small class="text-muted">BI</small>
                        <h6>42424242g</h6>

                        <small class="text-muted">Nacionalidade</small>
                        <h6>Moz</h6>

                        <small class="text-muted">Sexo</small>
                        <h6>Masculino</h6>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->
        @include('customers.assets.show.create')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Empréstimos/Parentes</h4>
                        <p class="card-title-desc"></p>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#loans" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Empréstimos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kins" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Parentes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#cards" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Documentos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#attachs" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Anexos</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="loans" role="tabpanel">
                                @include('customers.assets.show.emprestimos')
                            </div>
                            <div class="tab-pane" id="kins" role="tabpanel">
                                @include('customers.assets.show.parentes')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('customers.assets.show.js')

@endsection