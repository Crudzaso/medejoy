<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle" style="background-color: lightgray">
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary" style="width: 100%; background-color: lightgray">
        <!--begin::Header-->
        <div class="d-flex flex-column flex-center fs-6 fw-bold px-2 mb-5" id="kt_app_sidebar_primary_header">Vistas</div>
        <!--end::Header-->
        <!--begin::Sidebar navbar-->
            <!--begin::Nav-->
            <ul class="nav" style="width: 100%; justify-content: center">
                <!--begin::Navbar item-->
                <li class="nav-item py-1" style="width: 100%;">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" class="nav-link py-4 px-1 btn active" >
                        <span class="fs-9 fs-lg-7 fw-bold about_us">Rifas</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                @if(auth()->check())
                    <div style="display: flex; justify-content: space-evenly; align-items: center;">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark" style="padding: 5px; margin-left: 15px; width: 120px">Cerrar sesión</button>
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

<style>
    .nav-item:hover{
        background-color: gray;
    }

    .about_us:hover{
        color: white;
    }
</style>
