<body>

<!-- Header -->
<header>

    <!-- Navbar -->
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
        <div class="container">

            <!-- Navbar Brand-->
            <ul class="navbar-nav action">
            @guest
                <li dir="ltr" class="nav-item ml-3">
                <a href="{{ route('login') }}" target="_blank" class="btn ml-lg-auto primary-button"><i class="icon-user"></i>دخول</a>

                </li>
            @else  
            <li dir="ltr" class="nav-item dropdown" style="padding-left:10px ">
                    <a href="#" class="btn ml-lg-auto primary-button-flag primary-button"><i class="icon-arrow-down"></i>{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" style="margin-left:-22px ">
                        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span style="padding-left:10px ">Logout</span>
                                        <i class="icon-logout"></i>   
                                    </a>
                                   
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
          
            @endguest

                <li dir="ltr" class="nav-item ml-3">
                    <a href="#" target="_blank" class="btn ml-lg-auto primary-button"><i class="icon-reload"></i>تحميل</a>
                </li>
                <li dir="ltr" class="nav-item dropdown">
                    <a href="#" class="btn ml-lg-auto primary-button-flag primary-button"><i class="icon-arrow-down"></i><img src="{{asset('site/assets/images/flags/2.png')}}"></a>
                    <div class="dropdown-menu">
                        <a href="#" class="nav-link"><img src="{{asset('site/assets/images/flags/2.png')}}"></a>
                        <a href="#" class="nav-link"><img src="{{asset('site/assets/images/flags/3.png')}}"></a>
                        <a href="#" class="nav-link"><img src="{{asset('site/assets/images/flags/1.png')}}"></a>
                        <a href="#" class="nav-link"><img src="{{asset('site/assets/images/flags/2.png')}}"></a>
                    </div>
                </li>
            </ul>

            <!-- Navbar Itens-->
            <ul class="navbar-nav items ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link effect-motion-hover">الرئيسية</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link effect-motion-hover">شحن الألعاب <i class="icon-arrow-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="#" class="nav-link">بابجي</a>
                        <a href="#" class="nav-link">كروس فاير</a>
                        <a href="#" class="nav-link">كونكور</a>
                        <a href="#" class="nav-link">ليغ أوف ليجيندز</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link effect-motion-hover">أحدث الأخبار</a>
                </li>
            </ul>

            <!-- Navbar Icons-->
            <a class="navbar-brand" href="{{ route('home') }}">                       
                    <img src="{{asset('site/assets/images/logo.png')}}" alt="GEXIN">
            </a>
            <!-- Navbar Toggle-->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-grid m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action-->
        </div>
    </nav>

</header>
<!-- Banner -->