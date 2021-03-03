@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Emprestimo</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inícios</a></li>
                            <li class="breadcrumb-item active">Emprestimos</li>
                            <li class="breadcrumb-item active">emprestimo</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-4">
                <div class="card">

                    <div class="card-body" style="display: inline">
                        <div class="border-bottom" style="display: inline;">
                            <h4 class="text-center mb-4 mt-4">Dados</h4>
                        </div>

                        <div style="display: inline">
                            <small class="text-muted">Nome do Cliente</small>
                            <h6>{{$emprestimo->customer->name}} {{$emprestimo->customer->surname}}</h6>
                        </div>

                        <div style="display: inline">
                            <small class="text-muted">Telefone do Cliente</small>
                            <h6>{{$emprestimo->customer->phoneNumber}}</h6>
                        </div>

                        <small class="text-muted">Data do Emprestimo</small>
                        <h6>{{$emprestimo->data_emprestimo}}</h6>

                        <small class="text-muted">Data do Limite</small>
                        <h6>{{$emprestimo->data_limite}}</h6>

                        <small class="text-muted">Valor Concedido</small>
                        <h6 id="valor-concedido">{{$emprestimo->valorConcedido}}MT</h6>


                        <small class="text-muted">Juro Aplicado</small>
                        <h6>{{$emprestimo->taxaJuro}}%</h6>

                        <small class="text-muted">Total a pagar</small>
                        <h6>{{$emprestimo->valorDivida}}MT</h6>

                        <small class="text-muted">Total Remanescente</small>
                        <h6>{{$emprestimo->valorRemanescente}}MT</h6>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                <div class="page-title-box d-flex align-items-center row">
                                    <div class="col-12">
                                        <h4 class="card-title">Prestacoes</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="float-right pr-2 mb-2">
                                    <a href="javascript:void(0);" class="btn btn-success mb-2" data-toggle="modal" data-target=".create-modal"><i class="mdi mdi-plus mr-2"></i>Pagar Emprestimo</a>
                                </div>
                            </div>
                        </div>

                        <table id="datatable-pr" class="table table-bordered dt-responsive nowrap loan-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Data Pagamento</th>
                                    <th>Valor Pago</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- end col -->
        </div>
    </div>
</div>

@include('emprestimos.assets.show.js')
@include('emprestimos.assets.show.createPrestacao')

@endsection