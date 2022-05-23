<head>
    <!-- link to real stylesheet -->
    <link rel="stylesheet" href="{{asset('resources/views/front/style/front.css')}}">

    <style>
        #searchBox {
            width:114px !important;
            height: 34px !important;
        }

        #searchButton {
            height: 34px !important;
            border: none;
        }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Pisvaltech') }}
            </a>
            <button id="toogle_pinto" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a id="nav_login_pinto"<i class="far fa-envelope-open"></i>{{ __(' info@pisvaltech.com') }}</a>
                    </li>
                    <li class="nav-item ">
                        <a id="nav_login_pinto" <i class="fas fa-phone-square-alt"></i>{{ __(' (+244) 929757575') }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('customlang.top_menu7') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('customlang.top_menu8') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- menu bar-->
    <nav id="nav_bar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
        <a class="navbar-brand" href="{{url('https://pisvaltech.com/')}}"><img id="logo_brand"
                src="/resources/views/front/assets/images/pispal_logo.png" class="d-block w-100" alt="Pisvaltech"> </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item active">
                    <a class=" fa fa-home nav-link" href="https://pisvaltech.com/" aria-hidden="true"><span
                            class="sr-only">(current)</span></a>
                </li>-->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('customlang.top_menu')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <a class="dropdown-item" href="#">{{__('customlang.sub-menu.menu_one')}}</a>-->
                        <!--<div class="dropdown-divider"></div>-->
                        <a class="dropdown-item"
                            href="{{url('https://pisvaltech.com/about')}}">{{__('customlang.sub-menu.menu_two')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/value">{{__('customlang.sub-menu.menu_three')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/client">{{__('customlang.sub-menu.menu_four')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/community">{{__('customlang.sub-menu.menu_five')}}</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://pisvaltech.com/software_dev" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('customlang.top_menu1')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--<a class="dropdown-item" href="#">{{__('customlang.sub-menu.menuOne')}}</a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/software_dev">{{__('customlang.sub-menu.menuTwo')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/creative">{{__('customlang.sub-menu.menuThree')}} </a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/digitalmark">{{__('customlang.sub-menu.menuFour')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/finance">{{__('customlang.sub-menu.menuFive')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/human">{{__('customlang.sub-menu.menuSix')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/sale">{{__('customlang.sub-menu.menuSeven')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/support">{{__('customlang.sub-menu.menuEight')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/host">{{__('customlang.sub-menu.menuNight')}}</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('customlang.top_menu2')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--<a class="dropdown-item" href="#">{{__('customlang.sub-menu.cMenu1')}}</a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/carrier">{{__('customlang.sub-menu.cMenu2')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/work">{{__('customlang.sub-menu.cMenu3')}}</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('customlang.top_menu3')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--<a class="dropdown-item" href="#">{{__('customlang.sub-menu.ccMenu1')}}</a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/creative">{{__('customlang.sub-menu.ccMenu2')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/software_dev">{{__('customlang.sub-menu.ccMenu3')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/web-develop">{{__('customlang.sub-menu.ccMenu4')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/ecommerce">{{__('customlang.sub-menu.ccMenu5')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/wordpress">{{__('customlang.sub-menu.ccMenu6')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/magento">{{__('customlang.sub-menu.ccMenu7')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/emailSignatures">{{__('customlang.sub-menu.ccMenu8')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/busca-seo">{{__('customlang.sub-menu.ccMenu9')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/email-Marketing">{{__('customlang.sub-menu.ccMenu10')}}</a>
                        <a class="dropdown-item"
                            href="https://pisvaltech.com/manutencao-sistema">{{__('customlang.sub-menu.ccMenu11')}}</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://pisvaltech.com/portfolio">{{__('customlang.top_menu4')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://pisvaltech.com/contact">{{__('customlang.top_menu6')}} 24h</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://pisvaltech.com/blog">Blog</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ asset(Route::currentRouteName(), 'lang/pt') }}">
                        Port<img id="id_flight" src="resources/views/front/assets/images/Ang.jpg" alt="Angola">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset(Route::currentRouteName(), 'lang/en') }}">
                        Eng<img id="id_flight" src="resources/views/front/assets/images/SA_flag.jpg" alt="USA">
                    </a>
                </li>
            </ul>
            <!-- Search example -->
            <div class="searchbar">
                <section role="search" data-ss360="true">
                    <input type="search" id="searchBox">
                    <button id="searchButton"></button>
                </section>
            </div>

        </div>
        </div>
    </nav>

    <script type="text/javascript" src="resources/views/front/style/custom.js"></script>

    <!-- Start of Site Search 360 Scripts -->
    <script type="text/javascript">
        var ss360Config = {
            siteId: "pisvaltech.com",
            searchBox: {
                selector: "#searchBox"
            }
        }

    </script>
    <script src="https://cdn.sitesearch360.com/v13/sitesearch360-v13.min.js" async></script>
    <!-- End of Site Search 360 Scripts -->

</body>
