@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('includes.header')
            <div class="container-fluid">
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
    </div>