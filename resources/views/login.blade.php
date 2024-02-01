@extends('layouts.login_layout')
  @section('content')
    <!-- Inner content -->
    <div class="content-inner">

      <!-- Content area -->
      <div class="content d-flex justify-content-center align-items-center">
        <!-- Login card -->
          <form class="login-form needs-validation" action="{{url('post-login')}}" method="GET" novalidate>
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center mb-3">
                  <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                    <h1>ClearPath Orthodoctics</h1>
                    <!-- <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt=""> -->
                  </div>
                  <h5 class="mb-0">Login to your account</h5>
                  <span class="d-block text-muted">Enter your credentials below</span>
                </div>
                @error('login')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email or Phone or Code</label>
                  <div class="form-control-feedback form-control-feedback-start">
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="johnCarter@gmail.com" required>
                    <div class="invalid-feedback">Enter your username</div>
                    <div class="form-control-feedback-icon">
                      <i class="ph-user-circle text-muted"></i>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <div class="form-control-feedback form-control-feedback-start">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="•••••••••••" required>
                    <div class="invalid-feedback">Enter your username</div>
                    <div class="form-control-feedback-icon">
                      <i class="ph-lock text-muted"></i>
                    </div>
                  </div>
                  <div class="invalid-feedback">Enter your password</div>
                </div>

                <div class="d-flex align-items-center mb-3">
                  <label class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" checked>
                    <span class="form-check-label">Remember</span>
                  </label>

                  <a href="{{url('forgot-password')}}" class="ms-auto">Forgot password?</a>
                </div>

                <div class="mb-3">
                  <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                </div>

                <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
              </div>
            </div>
          </form>
          <!-- /login card -->
      </div>
      <!-- /content area -->
      @include('includes.footer')
    </div>
    <!-- /inner content -->
  @endsection