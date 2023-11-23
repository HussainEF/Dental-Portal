@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('includes.header')
            <div class="container-fluid">
                <h1>Loyality</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-light-primary shadow-none">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-circle-dollar-to-slot fa-xl text-white"></i>
                                            </div>
                                            <h6 class="mb-0 ms-3">Total Points</h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end mt-4">
                                            <a id="search-status-all" href="javascript:void(0);" class="btn btn-rounded btn-outline-primary" value="all">
                                                <strong>({{122}})</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light-secondary shadow-none">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="round rounded bg-secondary d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-circle-dollar-to-slot fa-xl text-white"></i>
                                            </div>
                                            <h6 class="mb-0 ms-3">Availed Points</h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end mt-4">
                                            <a id="search-status-all" href="javascript:void(0);" class="btn btn-rounded btn-outline-primary" value="all">
                                                <strong>({{122}})</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light-danger shadow-none">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-circle-dollar-to-slot fa-xl text-white"></i>
                                            </div>
                                            <h6 class="mb-0 ms-3">Remainings Points</h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end mt-4">
                                            <a id="search-status-all" href="javascript:void(0);" class="btn btn-rounded btn-outline-primary" value="all">
                                                <strong>({{122}})</strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <button class="form-control btn btn-outline-primary btn-light-primary btn-rounded btn-lg">Loyality Points</button> 
                                    </div>
                                </div> 
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <button class="form-control btn btn-outline-secondary btn-light-secondary btn-rounded btn-lg">Loyality Points Avail Transactions</button> 
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="form-control btn btn-outline-danger btn-light-danger btn-rounded btn-lg">Loyality Points Notifications</button> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
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
                                                <th>Case ID</th>
                                                <th>Loyality Points</th>
                                                <th>Date</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
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
    </div>