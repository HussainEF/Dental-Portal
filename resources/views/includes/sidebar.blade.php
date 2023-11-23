      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img">
              <h5>ClearPathOrthodontics</h5>
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
              <li class="sidebar-item mb-3">
                <form action="" class="sidebar-form">
                  <div class="input-group">
                      <button type="submit" name="search" id="search-btn" class="btn btn-light-primary">
                        <i class="fa fa-search text-primary"></i>
                      </button>
                    <input type="text" name="case_id" class="form-control text-primary" placeholder="Case ID" value="">
                  </div>
                </form>
              </li>
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <!-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li> -->
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="fa fa-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="fa fa-medkit"></i> 
                  </span>
                  <span class="hide-menu">Cases</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('case-add')}}" aria-expanded="false">
                  <span>
                    <i class="fa fa-plus"></i>
                  </span>
                  <span class="hide-menu">New Cases</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('patient-list')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-bed-pulse"></i>
                  </span>
                  <span class="hide-menu">Patients</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('loyality-list')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                  </span>
                  <span class="hide-menu">Loyalty</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('loyality-points-avail-request')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                  </span>
                  <span class="hide-menu">Loyalty Points Transactions</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('loyality-notifications')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-comments-dollar"></i>
                  </span>
                  <span class="hide-menu">Loyalty Notification</span>
                </a>
              </li>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->