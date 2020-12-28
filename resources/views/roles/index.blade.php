@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Roles</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Inícios</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"></h4>
                        <p class="card-title-desc">
                        </p>

                        <table id="roleDatatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                    <th>Nome</th>
                                    <th>Data de Criação</th>
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
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
<div data-simplebar class="h-100">
<div class="rightbar-title px-3 py-4">
    <a href="javascript:void(0);" class="right-bar-toggle float-right">
        <i class="mdi mdi-close noti-icon"></i>
    </a>
    <h5 class="m-0">Settings</h5>
</div>

<!-- Settings -->
<hr class="mt-0" />
<h6 class="text-center mb-0">Choose Layouts</h6>

<div class="p-4">
    <div class="mb-2">
        <img src="{{asset('assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
    </div>
    <div class="custom-control custom-switch mb-3">
        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
    </div>

    <div class="mb-2">
        <img src="{{asset('assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
    </div>
    <div class="custom-control custom-switch mb-3">
        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
    </div>

    <div class="mb-2">
        <img src="{{asset('assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="">
    </div>
    <div class="custom-control custom-switch mb-5">
        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
    </div>


</div>

</div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


@include('template.js')

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

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

<script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>

<script type="text/javascript">
    $(function() {
        var table = $('#roleDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('roles') }}",
            oLanguage: {
                "sEmptyTable": "Não foi encontrado nenhum registo",
                "sLoadingRecords": "A carregar...",
                "sProcessing": "A processar...",
                "sLengthMenu": "Mostrar _MENU_ registos",
                "sZeroRecords": "Não foram encontrados resultados",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
                "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
                "sInfoPostFix": "",
                "sSearch": "Procurar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Seguinte",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'created_at',
                    name: 'created_at'
                },


                {
                    data: 'acção',
                    name: 'acção',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>


@endsection
