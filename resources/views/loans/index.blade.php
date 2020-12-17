@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Empréstimos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inícios</a></li>
                            <li class="breadcrumb-item active">Clientes</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            
            <div class="col-12"  style="max-height: 90%">
                <div class="card">
                    
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-title-desc">
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <td>#BA1233</td>
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
                                <td>#SDF1233</td>
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
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>                                
                            </tr>
                            <tr>
                                <td>#FD1233</td>
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
                                            <a class="dropdown-item" href="#">Delete</a>
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

@endsection
