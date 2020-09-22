
<!DOCTYPE html>

<html lang="ar">
<head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>GEXIN</title>
        <meta name="description" content="GEXIN Website for Games Top Up">
        <meta name="subject" content="Top up your game with us">
        <meta name="author" content="egydesigner">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="{{asset('site/assets/images/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('site/assets/images/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('site/assets/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('site/assets/images/apple-touch-icon-114x114.png')}}">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{asset('site/assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/vendor/slider.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/vendor/icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/vendor/gallery.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/vendor/animation.min.css')}}">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{asset('site/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('site/assets/css/theme-dark.css')}}">
        <!-- ==============================================
        Section Configuration
        =============================================== -->
        <style>
            :root {
                --section-1-bg-color: #040402;
                --section-2-bg-color: #040402;
                --section-3-bg-color: #191919;
                --section-4-bg-color: #111111;
                --section-5-bg-color: #040402;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #040402;
                --section-8-bg-color: #191919;
                --section-9-bg-color: #111111;
                --section-10-bg-color: #191919;
                --section-11-bg-color: #040402;
            
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
            }
        </style>
        
    </head>

    <body>

        <!-- Header -->
        <header>

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container">

                    <!-- Navbar Brand-->
                    <ul class="navbar-nav action">
                        <li dir="ltr" class="nav-item ml-3">
                            <a href="#" target="_blank" class="btn ml-lg-auto primary-button" data-toggle="modal" data-target="#sign"><i class="icon-user"></i>دخول</a>
						</li>
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
                            <a href="index.html" class="nav-link effect-motion-hover">الرئيسية</a>
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
                            <a href="blog.html" class="nav-link effect-motion-hover">أحدث الأخبار</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons-->
                    <a class="navbar-brand" href="index.html">                       
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
            <section class="showcase blog-grid"><br>

            <div class="container" align="center">
              <div class="col-12 col-lg-6">
                <div class="filters border border-secondary rounded p-4">
                <form method="POST" action="{{ route('register') }}" class="row">
                        @csrf
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>أنشاء حساب جديد</h2>
                                        <p>أذ كان لديك حساب قم بتسجيل الدخول <a href="{{ route('login') }}" class="primary-color" style="color:#ffb400">من هنا</a></p>
                                    </div>
                                </div>
                                <div class="row" dir="rtl">
                                    <div class="col-12 p-0 input-group">
                                        <input id="name" type="text" placeholder="اسم المستخدم" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                    <input id="email" type="email" placeholder="البريد الإلكتروني" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                   
                                </div>
                                <div class="col-12 p-0 input-group">

                                    <select name="category"   class="form-control">
                                        {{--  <option value="1" @if (old("category")){{ (in_array($category->id, old("category")) ? "selected":"") }}@endif>{{ $category->title }}</option>  --}}
                                        <option value="1"  >إختر الدولة</option>

                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                       
                                    <div class="col-12 p-0 input-group">
                                    <input id="password" type="password" placeholder="كلمة المرور"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                    <input id="password-confirm" type="password" placeholder="اعد ادخال  كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button type="submit" class="btn primary-button">أنشاء</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        	<div class="row item">

                            <div class="col-12 align-self-center" align="center">

                                <h4> او قم بأنشاء الحساب عن طريق</h4>

                                <ul class="navbar-nav social share-list">


                                    <li class="nav-item">

                                        <a href="{{ route('social.login', 'facebook') }}" class="nav-link"><i class="icon-social-facebook"></i></a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#" class="nav-link"><i class="icon-social-google"></i></a>

                                    </li>

                                 

                                </ul>

                            </div>

                        </div>     

                </div>
              </div>
            </div>

        </section>
                           

        <!-- Footer -->
        <footer>
            <!-- Copyright -->
            <section id="copyright" class="copyright p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 text-lg-left text-left pt-2">
							<a href="about.html" class="nav-link float-left">من نحن</a>
							<a href="#" class="nav-link float-left">سياسة الإستخدام</a>
							<a href="#" class="nav-link float-left">بيان الخصوصية</a>
                        </div>
                        <div class="col-lg-6 col-md-12 p-3 text-center text-lg-right">
                            <p>© 2020 GEXIN All Rights Reserved | Powered by <a href="https://egydesigner.com" target="_blank">egy designer</a>.</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true" align="right">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        تسجيل الدخول <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>سجل الدخول</h2>
                                        <p>أو قم بأنشاء حساب <a href="#" class="primary-color" data-toggle="modal" data-target="#register">من هنا</a></p>
                                    </div>
                                </div>
                                <div class="row" dir="rtl">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="البريد الإلكتروني" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" placeholder="كلمة المرور"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-login"></i>دخول</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true" align="right">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        أنشاء حساب <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" class="row">
                        @csrf
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>أنشاء حساب جديد</h2>
                                        <p>أذ كان لديك حساب قم بتسجيل الدخول <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">من هنا</a></p>
                                    </div>
                                </div>
                                <div class="row" dir="rtl">
                                    <div class="col-12 p-0 input-group">
                                        <input id="name" type="text" placeholder="اسم المستخدم" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                    <input id="email" type="email" placeholder="البريد الإلكتروني" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                   
                                </div>
                                        <div class="col-12 p-0 input-group">

                                            <select name="category"   class="form-control">
                                                {{--  <option value="1" @if (old("category")){{ (in_array($category->id, old("category")) ? "selected":"") }}@endif>{{ $category->title }}</option>  --}}
                                                <option value="1"  >إختر الدولة</option>

                                            </select>
                                            @if ($errors->has('category'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('category') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                               
                                    <div class="col-12 p-0 input-group">
                                    <input id="password" type="password" placeholder="كلمة المرور"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                    <input id="password-confirm" type="password" placeholder="اعد ادخال  كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button type="submit" class="btn primary-button">أنشاء</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal [responsive menu] -->
        <div id="menu" class="modal fade p-0" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header" data-dismiss="modal">
                        القائمة <i class="icon-close icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#">
                <i class="icon-arrow-up"></i>
            </a>
        </div>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{asset('site/assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/slider.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/gallery.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/animation.min.js')}}"></script>
        <script src="{{asset('site/assets/js/main.js')}}"></script>


    </body>
</html>