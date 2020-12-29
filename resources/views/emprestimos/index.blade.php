@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-6">
                <div class="page-title-box d-flex align-items-center row">
                    <div class="col-12">
                        <h4 class="mb-0">Empréstimos</h4>
                    </div>

                    <div class="page-title-right col-12 pt-2">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Início</a></li>
                            <li class="breadcrumb-item active">empréstimos</li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="float-right pr-2 mb-2">
                    <a href="javascript:void(0);" class="btn btn-success mb-2" data-toggle="modal" data-target=".create-modal"><i class="mdi mdi-plus mr-2"></i>Novo Empréstimo</a>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @include('emprestimos.assets.edit')
        @include('emprestimos.assets.create')
        @include('emprestimos.assets.pay')

        <div class="row">

            <div class="col-12" style="max-height: 90%">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-title-desc">
                        </p>

                        <table id="emprestimoDatatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Data Emprestimo</th>
                                    <th>Valor concedido</th>
                                    <th>Juro(%)</th>
                                    <th>Remanescente</th>
                                    <th>Estado</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>

    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@include('emprestimos.assets.js')

@endsection