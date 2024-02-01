@extends('layouts.main_layout')
    @section('content')
        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light page-header-static shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Loyality
                        </h4>

                        <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                    <!-- <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
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
                    </div> -->
                </div>

                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="{{url('dashboard')}}" class="breadcrumb-item"><i class="ph-house"></i><span class="ms-1">Home</span></a>
                            <a href="#" class="breadcrumb-item active">Loyality</a>
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
                <livewire:loyality.loyality :cardNumber="$cardNumber" />
            </div>
            <!-- /content area -->
            
        </div>
        <!-- /inner content -->
    @endsection