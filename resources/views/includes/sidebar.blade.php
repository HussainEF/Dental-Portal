<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg bg-yellow">

  <!-- Sidebar content -->
  <div class="sidebar-content">

    <!-- Sidebar header -->
    <div class="sidebar-section">
      <div class="sidebar-section-body d-flex justify-content-center">
        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

        <div>
          <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
            <i class="ph-arrows-left-right"></i>
          </button>

          <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
            <i class="ph-x"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- /sidebar header -->


    <!-- Main navigation -->
    <div class="sidebar-section">
      <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Search Box Livewire Component-->
        <li class="nav-item p-3">
          <livewire:case-search>
        </li>

        <!-- Main -->
        <li class="nav-item-header pt-0">
          <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
          <i class="ph-dots-three sidebar-resize-show"></i>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard')}}" class="nav-link">
            <i class="ph-house"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Layout -->
        <li class="nav-item-header">
          <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
          <i class="ph-dots-three sidebar-resize-show"></i>
        </li>
        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="ph-first-aid-kit"></i> <span>Cases</span></a>
          <ul class="nav-group-sub collapse">
            <li class="nav-item">
              <a href="{{url('case-add')}}" class="nav-link"><i class="ph-first-aid"></i>Add Case</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="ph-bed"></i> <span>Patient</span></a>
          <ul class="nav-group-sub collapse">
            <li class="nav-item"><a href="{{url('patient-list')}}" class="nav-link"><i class="ph-bed"></i> Patient</a></li>
          </ul>
        </li>
        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="ph-medal"></i> <span>Loyality</span></a>
          <ul class="nav-group-sub collapse">
            <li class="nav-item"><a href="{{url('loyality', ['cardId' => '1'])}}" class="nav-link"><i class="ph-medal"></i>Loyality</a></li>
            <li class="nav-item"><a href="{{url('loyality', ['cardId' => '2'])}}" class="nav-link"><i class="ph-currency-circle-dollar"></i>Loyality Points Transactions</a></li>
            <li class="nav-item"><a href="{{url('loyality', ['cardId' => '3'])}}" class="nav-link"><i class="ph-bell"></i>Loyality Notifications</a></li>
          </ul>
        </li>
        <!-- /layout -->

      </ul>
    </div>
    <!-- /main navigation -->

  </div>
  <!-- /sidebar content -->

</div>
<!-- /main sidebar -->