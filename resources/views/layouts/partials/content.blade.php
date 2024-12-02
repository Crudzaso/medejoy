<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card">
            <div class="card-body" style="width: 100%">
                <img src="{{asset('images/dashboardBG.webp')}}" style="width: 100%; z-index: -1" id="raffle_img" alt="Bienvenidos">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; animation: darken 2s forwards;"></div>
                <img src="{{asset('assets/logo/medejoy-logo.png')}}" style="position: absolute; top: 50%; left: 50%;bottom: 25%; transform: translate(-50%, -50%); width: 300px; height: auto; z-index: 1;">
                <form action="@if(auth() -> check())
                    {{ route('ruffles') }}
                    @else
                    {{ route('register') }}
                @endif
                " method="GET">
                    <button class="btn btn-success" style="position: absolute; top: 55%; left: 50%; transform: translate(-50%, 250%); padding: 10px 20px; font-size: 16px; z-index: 1;">
                        ¡¡¡ Juega y gana !!!
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer" style="background-color: lightgray">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-gray-900 order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2024&copy;</span>
                <a href="" target="_blank" class="text-gray-800 text-hover-primary">Medejoy</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/Vm7VRE" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
<!--end:::Main-->
<style>
    @keyframes darken {
        from {
            opacity: 0;
        }
        to {
            opacity: 0.7;
        }
    }
