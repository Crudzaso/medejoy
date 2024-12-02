<!--begin::Header-->
<div id="kt_app_header" class="app-header" style="background-color: lightgray; border: solid 2px darkgray">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex justify-content-around" id="kt_app_header_container">
        <!--begin::Header logo-->
        <div class="app-header-logo d-flex align-items-center ps-lg-2 me-lg-10">
            <!--begin::Mobile toggle-->
            <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
            <!--end::Mobile toggle-->
            <!--begin::Logo image-->
            <a href="#">
                <img src="{{asset('assets/logo/medejoy-logo.png')}}" alt="Logo" class="medejoy_logo" width="70px" height="70px">
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Header logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-2">
            <!--begin::Menu wrapper-->
            <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                <!--begin::Menu holder-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                </div>
                <!--end::Menu holder-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Notifications-->
                <div class="app-navbar-item ms-3 ms-md-6" style="width: 200px; margin: 0">
                    <x-profile/>
                </div>
                <!--end::Notifications-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
