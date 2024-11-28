@if(auth()->check())
    <div style="display: flex; justify-content: space-evenly; align-items: center; width: 200px;">
        <!-- Contenido para usuarios autenticados -->
        <p style="margin-top: 10px">Bienvenido, {{ auth()->user()->name }}!</p>
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{asset('assets/logo/default_profile.png')}}" alt="profile" style="width: 50px; height: 50px;">
        </div>
        <!--end::Menu wrapper-->
    </div>
@else
 <div style="flex-direction: row; display: flex; justify-content: space-evenly; width: 300px; margin-right: 250px; gap: 10px; padding-right: 20px;">
    <a href="{{ route('login') }}" class="btn btn-primary" style="font-size: small; width: 150px; margin-top: 10px; display: inline-block; text-align: center; text-decoration: none; padding: 10px;">
        Iniciar sesión
    </a>
    <a href="{{ route('register') }}" class="btn btn-primary" style="font-size: small; margin-right: 150px; margin-top: 10px; display: inline-block; text-align: center; text-decoration: none; padding: 10px;">
        Registrarse
    </a>
</div>
@endif

