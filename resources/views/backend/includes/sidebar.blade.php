<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{url('/images/apple-touch-icon-114x114.png')}}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8;background-color:#fff">
        <span class="brand-text font-weight-bold" style="color: #FFB400;">Gexin Admin </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('/images/apple-touch-icon-114x114.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active" style="background-color: #b78306;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

            
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="{{url('/images/web-page.png')}}" alt=" Logo" style="width: 30px">
                        <p>
                            pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>


                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/slider.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    Slider
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/sliderspage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>slider</p>
                                    </a>
                                </li>
                              
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/newspaper.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    LatestNews
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/latestnewspage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>LatestLNews</p>
                                    </a>
                                </li>
                           

                            </ul>

                        </li>

                    </ul>
 
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/play-button.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    Videos
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/videopage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>videos</p>
                                    </a>
                                </li>
                           

                            </ul>

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/ecommerce.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    Paymentgateways
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/paymentgatewayspage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>paymentgateways</p>
                                    </a>
                                </li>
                           

                            </ul>

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/about.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    AboutUs
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/aboutuspage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AboutUs</p>
                                    </a>
                                </li>
        

                            </ul>

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/plan.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    PrivacyPolicy
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/privacypolicypage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>privacypolicy</p>
                                    </a>
                                </li>
                           

                            </ul>

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <img src="{{url('/images/policy.png')}}" alt=" Logo" style="width: 30px">
                                <p>
                                    UsagePolicy
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('backend/usagepolicypage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>usagepolicy</p>
                                    </a>
                                </li>
                             

                            </ul>

                        </li>
                        

                    </ul>
                    <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="{{url('/images/web-page.png')}}" alt=" Logo" style="width: 30px">
                        <p>
                        Categories Games
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{url('backend/categories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                Categories games
                                </p>
                            </a>
                        

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{route('gamepage')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                 games
                                </p>
                            </a>
                        

                        </li>

                    </ul>
                </li>
                    <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="{{url('/images/web-page.png')}}" alt=" Logo" style="width: 30px">
                        <p>
                        Categories products                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{url('backend/categoriesproduct')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                Categories products                            <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                        

                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{url('backend/products')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                products
                                </p>
                            </a>
                        

                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('setting.edit','1') }}" class="nav-link">
                        <img src="{{url('/images/sidebar.png')}}" alt=" Logo" style="width: 30px">
                        <p>
                        Side Bar
                        </p>
                    </a>
                 
                 
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>