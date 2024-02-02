@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('includes.header')
            <div class="container-fluid">
                <h1>Loyality Notifications</h1>
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
                                                <th>Patient Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                                <td>Approved</td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                                <td>Approved</td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                <td>Approved</td>
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