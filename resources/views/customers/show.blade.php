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
            </div> <!-- end col -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Emprestimos</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap loan-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Empréstimo ID</th>
                                <th>Data Emprestimo</th>
                                <th>Valor concedido</th>
                                <th>Juro(%)</th>
                                <th>Remanescente</th>
                                <th>Acção</th>
                            </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#">Ver</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Apagar</a>
                                            </div>
                                        </div>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td>#AB1233</td>
                                    <td>02-02-2020</td>
                                    <td>25000MT</td>
                                    <td>5%</td>
                                    <td>30000MT</td>
                                    <td>
                                        <div class="dropdown mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acção<i class="mdi mdi-chevron-down"></i>
                                            </a>
    
                                            <div class="dropdown-menu" style="">
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
        </div> <!-- end row -->

    </div>

    <script>
        $('#datatable').DataTable({
            "pageLength" : 5,
            "lengthChange": false,
            "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
        })
    </script>

@endsection
