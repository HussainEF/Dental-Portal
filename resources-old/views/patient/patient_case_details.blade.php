@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('includes.header')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-light-secondary shadow-none">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="round rounded bg-secondary d-flex align-items-center justify-content-center">
                                        <i class="fa fa-medkit fa-xl text-white" aria-hidden="true"></i>
                                    </div>
                                    <h1 class="mb-0 ms-2">Case</h1>
                                    <div class="ms-auto text-secondary d-flex align-items-center">
                                        <i class="fa fa-hashtag" aria-hidden="true"></i>
                                        <h3 class="mb-0 fw-semibold fs-7">15</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                        <!-- --------------------------------------------------- -->
                        <!--  Form Basic Start -->
                        <!-- --------------------------------------------------- -->
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="px-4 py-3 border-bottom bg-light-info">
                                <h5 class="card-title fw-semibold mb-0 lh-sm">Setup Details</h5>
                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive rounded-2 mb-4">
                                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th><h6 class="fs-4 fw-semibold mb-0"><i class="fa fa-hashtag" aria-hidden="true"></i></h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Link</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Code</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Date</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Budget</h6></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                                                        <span class="fw-normal">Web Designer</span>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><p class="mb-0 fw-normal fs-4">Elite Admin</p></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="#" class="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        S
                                                    </a>
                                                    <a href="#" class="bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        D
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-light-success text-success fw-semibold fs-2">Active</span>
                                                </td>
                                                <td>
                                                    <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle" width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                                                        <span class="fw-normal">Project Manager</span>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="#" class="bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        A
                                                    </a>
                                                    <a href="#" class="bg-warning text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        X
                                                    </a>
                                                    <a href="#" class="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        N
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-light-warning text-warning fw-semibold fs-2">Pending</span>
                                                </td>
                                                <td>
                                                    <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- --------------------------------------------------- -->
                        <!--  Form Basic End -->
                        <!-- --------------------------------------------------- -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                        <!-- --------------------------------------------------- -->
                        <!--  Form Basic Start -->
                        <!-- --------------------------------------------------- -->
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="px-4 py-3 border-bottom bg-light-info">
                                <h5 class="card-title fw-semibold mb-0 lh-sm">Patient Approval/Modification History</h5>
                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive rounded-2 mb-4">
                                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th><h6 class="fs-4 fw-semibold mb-0"><i class="fa fa-hashtag" aria-hidden="true"></i></h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Link</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Code</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Status</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Comment</h6></th>
                                                <th><h6 class="fs-4 fw-semibold mb-0">Date</h6></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                                                        <span class="fw-normal">Web Designer</span>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><p class="mb-0 fw-normal fs-4">Elite Admin</p></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="#" class="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        S
                                                    </a>
                                                    <a href="#" class="bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        D
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-light-success text-success fw-semibold fs-2">Active</span>
                                                </td>
                                                <td>
                                                    <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <img src="../../dist/images/profile/user-2.jpg" class="rounded-circle" width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                                                        <span class="fw-normal">Project Manager</span>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="#" class="bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        A
                                                    </a>
                                                    <a href="#" class="bg-warning text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        X
                                                    </a>
                                                    <a href="#" class="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center" style="width: 39px; height: 39px;">
                                                        N
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-light-warning text-warning fw-semibold fs-2">Pending</span>
                                                </td>
                                                <td>
                                                    <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- --------------------------------------------------- -->
                        <!--  Form Basic End -->
                        <!-- --------------------------------------------------- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>