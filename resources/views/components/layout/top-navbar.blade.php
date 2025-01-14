<nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color: #579aff">
    <div class="container">
        <a href="{{ route('home') }}" wire:navigate class="navbar-brand">
            <img src="{{asset('logo.png')}}" alt="AdminLTE Logo" class="img-circle" style="max-width: 65px !important">
            <span class="brand-text font-weight-light">Interpretador de Sentimentos</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
{{--                <li class="nav-item dropdown">--}}
{{--                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>--}}
{{--                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">--}}
{{--                        <li><a href="#" class="dropdown-item">Some action </a></li>--}}
{{--                        <li><a href="#" class="dropdown-item">Some other action</a></li>--}}

{{--                        <li class="dropdown-divider"></li>--}}

{{--                        <!-- Level two dropdown-->--}}
{{--                        <li class="dropdown-submenu dropdown-hover">--}}
{{--                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>--}}
{{--                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">--}}
{{--                                <li>--}}
{{--                                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>--}}
{{--                                </li>--}}

{{--                                <!-- Level three dropdown-->--}}
{{--                                <li class="dropdown-submenu">--}}
{{--                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>--}}
{{--                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">--}}
{{--                                        <li><a href="#" class="dropdown-item">3rd level</a></li>--}}
{{--                                        <li><a href="#" class="dropdown-item">3rd level</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <!-- End Level three -->--}}

{{--                                <li><a href="#" class="dropdown-item">level 2</a></li>--}}
{{--                                <li><a href="#" class="dropdown-item">level 2</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <!-- End Level two -->--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

            <!-- SEARCH FORM -->
{{--            <form class="form-inline ml-0 ml-md-3">--}}
{{--                <div class="input-group input-group-sm">--}}
{{--                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button class="btn btn-navbar" type="submit">--}}
{{--                            <i class="fas fa-search"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Se estiver logado ele mostra o botão de sair -->
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" role="button" wire:navigate>
                        Sair
                    </a>
                </li>
            @else
            <!-- Se não estiver logado ele mostra o botão de Login e cadastro -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" role="button" wire:navigate>
                        Fazer login
                    </a>
                </li>
                <li class="d-flex align-items-center"> | </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cadastro') }}" role="button" wire:navigate>
                        Cadastrar
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
