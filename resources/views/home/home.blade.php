@extends('template.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Resumo</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">início</a></li>
                            <li class="breadcrumb-item active">Resumo</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Total Concedido</p>
                                        <h4 class="mb-0">MT 1452</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-stack-line font-size-24"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body border-top py-3">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Este Mês</p>
                                    <h4 class="mb-0">MT 1452</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Número de Empréstimos</p>
                                        <h4 class="mb-0">2040</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-store-2-line font-size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Este Mês</p>
                                    <h4 class="mb-0">MT 1452</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Total </p>
                                        <h4 class="mb-0">45</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-briefcase-4-line font-size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top py-3">
                                <div class="text-truncate">
                                    <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                                    <span class="text-muted ml-2">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Empréstimos por faixa etária</h4>

                        <div id="column_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
                <!--end card-->
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Faixa Etária dos Clientes</h4>

                        <div id="donut-chart" class="apex-charts"></div>

                        <div class="row">
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary font-size-10 mr-1"></i> 18-21</p>
                                    <h5>42 %</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success font-size-10 mr-1"></i> 21-25</p>
                                    <h5>26 %</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-warning font-size-10 mr-1"></i> 25-30</p>
                                    <h5>42 %</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Earning Reports</h4>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <div class="mb-3">
                                            <div id="radialchart-1" class="apex-charts"></div>
                                        </div>

                                        <p class="text-muted text-truncate mb-2">Weekly Earnings</p>
                                        <h5 class="mb-0">$2,523</h5>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mt-5 mt-sm-0">
                                        <div class="mb-3">
                                            <div id="radialchart-2" class="apex-charts"></div>
                                        </div>

                                        <p class="text-muted text-truncate mb-2">Monthly Earnings</p>
                                        <h5 class="mb-0">$11,235</h5>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            
        <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Recent Activity Feed</h4>

                        <div data-simplebar style="max-height: 330px;">
                            <ul class="list-unstyled activity-wid">
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-edit-2-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">28 Apr, 2020 <small class="text-muted">12:07 am</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Responded to need “Volunteer Activities”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-user-2-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">21 Apr, 2020 <small class="text-muted">08:01 pm</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Added an interest “Volunteer Activities”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-bar-chart-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">17 Apr, 2020 <small class="text-muted">09:23 am</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Joined the group “Boardsmanship Forum”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-mail-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">11 Apr, 2020 <small class="text-muted">05:10 pm</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-calendar-2-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">07 Apr, 2020 <small class="text-muted">12:47 pm</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Created need “Volunteer Activities”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-edit-2-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">05 Apr, 2020 <small class="text-muted">03:09 pm</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Attending the event “Some New Event”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="ri-user-2-fill"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                            <h5 class="font-size-13">02 Apr, 2020 <small class="text-muted">12:07 am</small></h5>
                                        </div>

                                        <div>
                                            <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Últimos empréstimos</h4>

                        <div class="table-responsive">
                            <table class="table table-centered datatable dt-responsive nowrap" data-page-length="5" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck">
                                                <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Billing Name</th>
                                        <th>Total</th>
                                        <th>Payment Status</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                                <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1572</a> </td>
                                        <td>
                                            04 Apr, 2020
                                        </td>
                                        <td>Walter Brown</td>

                                        <td>
                                            $172
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck2">
                                                <label class="custom-control-label" for="ordercheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1571</a> </td>
                                        <td>
                                            03 Apr, 2020
                                        </td>
                                        <td>Jimmy Barker</td>

                                        <td>
                                            $165
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck3">
                                                <label class="custom-control-label" for="ordercheck3">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1570</a> </td>
                                        <td>
                                            03 Apr, 2020
                                        </td>
                                        <td>Donald Bailey</td>

                                        <td>
                                            $146
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck4">
                                                <label class="custom-control-label" for="ordercheck4">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1569</a> </td>
                                        <td>
                                            02 Apr, 2020
                                        </td>
                                        <td>Paul Jones</td>

                                        <td>
                                            $183
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck5">
                                                <label class="custom-control-label" for="ordercheck5">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1568</a> </td>
                                        <td>
                                            01 Apr, 2020
                                        </td>
                                        <td>Jefferson Allen</td>

                                        <td>
                                            $160
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-danger font-size-12">Chargeback</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck6">
                                                <label class="custom-control-label" for="ordercheck6">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1567</a> </td>
                                        <td>
                                            31 Mar, 2020
                                        </td>
                                        <td>Jeffrey Waltz</td>

                                        <td>
                                            $105
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck7">
                                                <label class="custom-control-label" for="ordercheck7">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1566</a> </td>
                                        <td>
                                            30 Mar, 2020
                                        </td>
                                        <td>Jewel Buckley</td>

                                        <td>
                                            $112
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck8">
                                                <label class="custom-control-label" for="ordercheck8">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1565</a> </td>
                                        <td>
                                            29 Mar, 2020
                                        </td>
                                        <td>Jamison Clark</td>

                                        <td>
                                            $123
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck9">
                                                <label class="custom-control-label" for="ordercheck9">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1564</a> </td>
                                        <td>
                                            28 Mar, 2020
                                        </td>
                                        <td>Eddy Torres</td>

                                        <td>
                                            $141
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ordercheck10">
                                                <label class="custom-control-label" for="ordercheck10">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1563</a> </td>
                                        <td>
                                            28 Mar, 2020
                                        </td>
                                        <td>Frank Dean</td>

                                        <td>
                                            $164
                                        </td>
                                        <td>
                                            <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    @include('home.js')
    @endsection