@extends('layouts.main_layout')
    @section('content')
        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light page-header-static shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Add New Case
                        </h4>

                        <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>

                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="{{url('dashboard')}}" class="breadcrumb-item"><i class="ph-house"></i><span class="ms-1">Home</span></a>
                            <a href="#" class="breadcrumb-item">Case Detail</a>
                            <span class="breadcrumb-item active">Manage Pictures</span>
                        </div>

                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            
            <!-- Content area -->
            <div class="content">
                <livewire:case-detail.component.upload-photo/>
            </div>
            <!-- /content area -->
            
        </div>
        <!-- /inner content -->
    @endsection