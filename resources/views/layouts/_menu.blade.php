<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class=" text-center">
            <img src="./assets/img/icon.png" style="width: 70%;" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Inicio</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Administrar</span>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('oferta.turistica.index') ? 'active' : '' }}">
                <a href="{{ route('oferta.turistica.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">Ofertas turisticas</div>
                </a>
            </li>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('abastecimiento.index') ? 'active' : '' }}">
                <a href="{{ route('abastecimiento.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">Abastecimiento</div>
                </a>
            </li>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('riesgo.index') ? 'active' : '' }}">
                <a href="{{ route('riesgo.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">Riesgos</div>
                </a>
            </li>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('institucion.index') ? 'active' : '' }}">
                <a href="{{ route('institucion.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">Instituciones educativas</div>
                </a>
            </li>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('indicador.index') ? 'active' : '' }}">
                <a href="{{ route('indicador.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Analytics">ODS</div>
                </a>
            </li>
        </li>
        <li class="menu-item">
            <li class="menu-item {{ Request::routeIs('map.index') ? 'active' : '' }}">
                <a href="{{ route('map.index') }}" class="menu-link">
                    <i class='menu-icon tf-icons bx bx-map-alt'></i>
                    <div data-i18n="Analytics">Mapas</div>
                </a>
            </li>
        </li>
    </ul>
</aside>
<!-- / Menu -->
