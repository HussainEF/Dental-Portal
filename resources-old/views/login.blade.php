@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-xl-7 col-xxl-8">
              <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="{{asset('/assets/images/aligner4.jpg')}}" width="180" alt="">
              </a>
              <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="{{asset('/assets/images/cp1.png')}}" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  
                  <h2 class="mb-3 fs-7 fw-bolder">Welcome to ClearPath Orthodontics</h2>
                  <form action="{{url('post-login')}}" method="GET">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email or Phone</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexCheckChecked">
                          Remeber this Device
                        </label>
                      </div>
                      <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot Password ?</a>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Log In</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection