@extends('layouts.main_layout')
    @section('content')
        <!-- Page header -->
        <div class="page-header page-header-light page-header-static shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard
                    </h4>

                    <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                    <div class="hstack gap-3 mb-3 mb-lg-0">
                        <button type="button" class="btn btn-primary">
                            <i class="ph-gear me-2"></i>
                            Button
                        </button>

                        <div class="dropdown">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                Dropdown
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <button type="button" class="dropdown-item">Menu item 1</button>
                                <button type="button" class="dropdown-item">Menu item 2</button>
                                <button type="button" class="dropdown-item">Menu item 3</button>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="dropdown-item">Menu item 4</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="#" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Patient List</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content">
                <div>
                    <h1>Patient List</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- --------------------- start Zero Configuration---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="zero_config"
                                        class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                            <!-- start row -->
                                            <tr>
                                                <th>CaseID</th>
                                                <th>Official Email</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <!-- start row -->
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <a href="{{url('patient-case-details')}}"><i class="fa fa-link me-3" aria-hidden="true"></i></a>
                                                    <a href="{{url('view-patient-progress')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>
                                                    <a href="{{url('patient-case-details')}}"><i class="fa fa-link me-3" aria-hidden="true"></i></a>
                                                    <a href="{{url('view-patient-progress')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end row -->
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------end Zero Configuration---------------- -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /content area -->
            
        </div>
        <!-- /inner content -->
    @endsection