@extends('layouts.main_layout')
    @section('content')
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light page-header-static shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Change Password
                        </h4>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        <livewire:change-password/>
                    </div>
                </div>
            </div>
            <!-- /content area -->
            
        </div>
        <!-- /inner content -->
    @endsection