<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <div class="topbar-item topbar-item-breadcrumb" >
                <div class="col-lg-12 d-flex align-items-center py-3">
                    <h4 class="page-header mb-0">
                        @yield('page-heading')
                    </h4>
                    <ol class="breadcrumb1 mb-0 font-weight-light">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}" class="text-muted">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        @yield('breadcrumbs')
                    </ol>
                </div>
            </div>
            <div class="topbar-item topbar-item-logout">
                <div
                    class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">
                    <span
                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span
                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                        {{ Auth::user()->name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <div  onclick="swag_logout()">
                            <span class="symbol-label font-size-h5 font-weight-bold"><i
                                class="fas fa-power-off"></i></span>
                        </div>          
                    </span>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>