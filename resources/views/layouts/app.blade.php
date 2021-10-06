@yield('head')
<!DOCTYPE html>
<html lang="ar">

<head>
    <title>قسم التدريب - شركة مايكروزول للبرمجيات</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assest-front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assest-front/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assest-front/css/themify-icons.css" />
    <link rel="stylesheet" href="assest-front/css/magnific-popup.css" />
    <link rel="stylesheet" href="assest-front/css/animate.css" />
    <link rel="stylesheet" href="assest-front/css/owl.carousel.css" />
    <link rel="stylesheet" href="assest-front/css/style.css" />
    <!-- toasr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body dir="rtl">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a href="index.html" class="site-logo"><img src="assest-front/img/logo.png" alt=""></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-info">
                <div class="hf-item">
                    <i class="fa fa-clock-o"></i>
                    <p><span> </span>السبت - الخميس: <br> 8 صباحا - 6 مساء </p>
                </div>
                <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
                    <p><span>موقعنا :</span>غرب مول الواحة عمارة عبد المجيد السيد الطابق الثالث</p>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end-->


    <!-- Header section  -->
    <nav class="nav-section">
        <div class="container">
            <div class="nav-right">
                <a href=""><i class="fa fa-search"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div>
            <ul class="main-menu">
                <li class="active"><a href="/">الرئيسية</a></li>
                <li><a href="about">عنا</a></li>
                <li><a href="my-events">الأحداث</a></li>
                <li><a href="my-courses">الدورات التدريبية </a></li>
                <li><a href="blog">المدونة</a></li>

                @guest
                @if (Route::has('login'))
                    <li>
                        <a href="{{route('login')}}"
                            title="تسجيل دخول">تسجيل دخول</a>
                    </li>
                @endif

            @else

                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
               تسجيل خروج
          </a>
                </li>

            @endguest

                <li><a href="contact">تواصل معنا</a></li>
            </ul>
        </div>
    </nav>
    <!-- Header section end -->
    @yield('content')

    @yield('footer')
    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>النشرة الإخبارية</h3>
                        <p>اشترك واحصل على آخر الأخبار والنصائح المفيدة والنصائح وأفضل العروض .</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="البريد الإلكتروني">
                        <button class="site-btn">إشتراك</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->


    <!-- Footer section -->
    <footer class="footer-section" style="text-align:right;">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">
                        <!-- <img src="img/logo-light.png" alt=""> -->
                        <h3 style="color: azure;"> قسم التدريب</h3>
                        <p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut,
                            aliquet nisl.</p>
                        <div class="social pt-1">
                            <a href=""><i class="fa fa-twitter-square"></i></a>
                            <a href=""><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-google-plus-square"></i></a>
                            <a href=""><i class="fa fa-linkedin-square"></i></a>
                            <a href=""><i class="fa fa-rss-square"></i></a>
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">روابط مفيدة</h6>
                    <div class="dobule-link">
                        <ul>
                            <li><a href="">الرئيسية</a></li>
                            <li><a href="">عنا</a></li>
                            <li><a href="">خدماتنا</a></li>
                            <li><a href="">الأحداث</a></li>
                            <li><a href="">تواصل معنا</a></li>
                        </ul>
                        &nbsp;&nbsp;&nbsp;
                        <ul>

                            <li><a href="">Help</a></li>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Site map</a></li>
                            <li><a href="">الدورات التدريبية</a></li>
                            <li><a href="">المدونة</a></li>
                        </ul>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">أخر المنشورات </h6>
                    <ul class="recent-post">
                        <li>
                            <p>Snackable study:How to break <br> up your master's degree</p>
                            <span><i class="fa fa-clock-o"></i> &nbsp; 24 Mar 2018</span>
                        </li>
                        <li>
                            <p>Open University plans major <br> cuts to number of staff</p>
                            <span><i class="fa fa-clock-o"></i> &nbsp;24 Mar 2018</span>
                        </li>
                    </ul>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">تواصل معنا</h6>
                    <ul class="contact">
                        <li>
                            <p><i class="fa fa-map-marker"></i> &nbsp; السوق العربي , الخرطوم
                                غرب مول الواحه جوار بنك النيلين</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> &nbsp; 922318333 (249+)</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> &nbsp; training@microzool.com</p>
                        </li>
                        <li>
                            <p><i class="fa fa-clock-o"></i>&nbsp; السبت - الخميس :
                                8 صباحا - 6 مساء</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <script>
                        document.write(new Date().getFullYear());
                    </script> | صمم بواسطة <a href="http://www.microzool.com" target="_blank">مايكروزول</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer section end-->



    <!--====== Javascripts & Jquery ======-->
    <script src="assest-front/js/jquery-3.2.1.min.js"></script>
    <script src="assest-front/js/owl.carousel.min.js"></script>
    <script src="assest-front/js/jquery.countdown.js"></script>
    <script src="assest-front/js/masonry.pkgd.min.js"></script>
    <script src="assest-front/js/magnific-popup.min.js"></script>
    <script src="assest-front/js/main.js"></script>

    {{-- toast --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif

        var items = $(".course-item .course-thumb img");
        items.hover(function() {

                $(this).animate({
                    opacity: 1,
                });
            },
            function() {
                
                $(this).animate({
                    opacity: 0.3,
                });
                
            });
    </script>
</body>

</html>
