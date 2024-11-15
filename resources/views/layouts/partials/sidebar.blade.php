<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary">
        <!--begin::Header-->
        <div class="d-flex flex-column flex-center fs-6 fw-bold px-2 mb-5" id="kt_app_sidebar_primary_header">Workspace</div>
        <!--end::Header-->
        <!--begin::Sidebar navbar-->
            <!--begin::Nav-->
            <ul class="nav">
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" class="nav-link py-4 px-1 btn active">
                        <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Collections</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                @if(auth()->check())
                    <div style="display: flex; justify-content: space-evenly; align-items: center;">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success" style="padding: 5px; margin-left: 15px; width: 120px">Cerrar sesión</button>
                        </form>
                    </div>
                @endif
            </ul>
        <!--end::Nav-->
        <!--end::Sidebar navbar-->
    </div>
    <!--end::Sidebar primary-->
</div>
<!--end::Sidebar-->
