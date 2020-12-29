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
                            <small class="text-muted">Phone</small>
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
                <div class="card bg-success text-white-50" style="height: 50%">

                    <div class="card-body" style="display: inline">
                        <div style="display: inline">
                            <h4 class="text-center text-white mb-4 mt-4">Total em Divida</h4>
                        </div>

                        <div class="text-center" style="display: inline">
                            <h5 class="text-white">MT 256.200,00</h5>
                        </div>

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
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="loans" role="tabpanel">
                                @include('customers.assets.emprestimos')
                            </div>
                            <div class="tab-pane" id="kins" role="tabpanel">
                                @include('customers.assets.parentes')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('template.js')
<!-- jquery.vectormap map -->
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>

<!-- form mask -->
<script src="{{ asset('assets/libs/inputmask/jquery.inputmask.min.js')}}"></script>

<!-- form mask init -->
<script src="{{ asset('assets/js/pages/form-mask.init.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>


<script>
    /* $('#datatable').DataTable({
            "pageLength": 5,
            "lengthChange": false,
            "lengthMenu": [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        })*/
</script>

@endsection