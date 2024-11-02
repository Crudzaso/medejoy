<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary">
        <!--begin::Header-->
        <div class="d-flex flex-column flex-center fs-6 fw-bold px-2 mb-5" id="kt_app_sidebar_primary_header">Workspace</div>
        <!--end::Header-->
        <!--begin::Sidebar navbar-->
        <div class="app-sidebar-nav flex-grow-1 hover-scroll-y scroll-ms px-4 pt-2" id="kt_app_sidebar_primary_nav" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_sidebar_primary_header, #kt_app_sidebar_primary_footer" data-kt-scroll-wrappers="#kt_app_content, #kt_app_sidebar_primary_nav" data-kt-scroll-offset="5px">
            <!--begin::Nav-->
            <ul class="nav">
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_collections" class="nav-link py-4 px-1 btn active">
                        <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">Collections</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
            </ul>
            <!--end::Nav-->
        </div>
        <!--end::Sidebar navbar-->
        <!--begin::Footer-->
        <div class="app-sidebar-footer d-flex flex-column flex-center" id="kt_app_sidebar_primary_footer">
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Sidebar primary-->
    <!--begin::Sidebar secondary-->
    <div class="app-sidebar-secondary">
        <!--begin::Sidebar menu-->
        <div id="kt_app_sidebar_secondary_wrapper" class="hover-scroll-y mx-3" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependecies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_content" data-kt-scroll-offset="5px">
            <!--begin::Tab content-->
            <div class="tab-content px-5 px-lg-6">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_app_sidebar_secondary_collections" role="tabpanel">
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_apis" role="tabpanel">
                    <!--begin::Apis-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-5">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-800">Visits by Country</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm btn-primary">View</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Apis-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_environment" role="tabpanel">
                    <!--begin::Environment-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Actions-->
                            <div class="text-end w-100">
                                <a href='#' class="btn btn-sm btn-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">New</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Environment-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_servers" role="tabpanel">
                    <!--begin::Servers-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Actions-->
                            <div class="text-end w-100">
                                <a href='#' class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">New</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Servers-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_notifications" role="tabpanel">
                    <!--begin::Notifications-->
                    <div class="card card-reset card-p-0">
                    </div>
                    <!--end::Notifications-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_app_sidebar_secondary_history" role="tabpanel">
                    <!--begin::History-->
                    <div class="card card-reset card-p-0">
                        <!--begin::Header-->
                        <div class="card-header d-flex align-items-start pt-0">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-800">Mining Status</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mt-0">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::History-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Sidebar menu-->
    </div>
    <!--end::Sidebar secondary-->
</div>
<!--end::Sidebar-->
