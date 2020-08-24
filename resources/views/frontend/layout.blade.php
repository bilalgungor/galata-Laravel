<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="{{$description}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <!-- Font Awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.css">
    <link rel="stylesheet" href="/frontend/css/owl.transitions.css">
    <!-- RS slider CSS
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="/frontend/lib/rs-plugin/css/settings.css" media="screen" />
    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery-ui.css">
    <!-- fancybox CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/fancybox/jquery.fancybox.css">
    <!-- Parcircle CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/percircle.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    @yield('HeaderScript')
</head>
<body>
<div class="wrapper home2">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header Area -->
    <header>
        <!-- Header Top Area Start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-contact">
                            <ul>
                                <li><span><i class="fa fa-phone"></i></span>Bizi Arayın:@if ($phone_sabit==null) {{$phone_gsm}} @else {{$phone_sabit}} @endif</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Header Top Area End -->
        <!-- Main Header Area Start -->
        <div class="main-header" id="sticker">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area floatright">
                            <a href="{{route('default.Index')}}"><img src="/images/settings/{{$logo}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="main-menu-area">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{route('default.Index')}}"> Anasayfa </a></li>
                                        <li><a href="#"> Kurumsal <i class="fa fa-caret-down"> </i></a>
                                            <ul>
                                                <li><a href="{{route('about.Index')}}">Hakkımızda</a></li>
                                                @isset($reference[0])<li><a href="{{route('ref.Index')}}">Referanslar</a></li>@endisset
                                                <li><a href="{{route('staff.Index')}}">Kadromuz</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Hizmetlerimiz <i class="fa fa-caret-down"> </i></a>
                                            <ul class="mega-menu-area">
                                                <li class="single-mega-menu">
                                                    <h3><i class="fa fa-ship"></i>İhracat</h3>
                                                @foreach($page as $service)
                                                    @if($service->page_category==0)
                                                        @if($service->page_status==1)
                                                            <a href="{{route('service.Index',$service->page_slug)}}">{{$service->page_title}}</a>
                                                            @endif
                                                            @endif
                                                            @endforeach
                                                </li>
                                                <li class="single-mega-menu">
                                                    <h3><i class="fa fa-plane"></i>İthalat</h3>
                                                    @foreach($page as $service)
                                                        @if($service->page_category==1)
                                                            @if($service->page_status==1)
                                                        <a href="{{route('service.Index',$service->page_slug)}}">{{$service->page_title}}</a>
                                                        @endif
                                                        @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('blog.Index')}}"> Blog & Haber </a></li>
                                        <li><a href="{{route('contact.Index')}}">İLETİŞİM</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area Start -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-logo">
                            <a href="{{route('default.Index')}}"><img alt="logo" src="/frontend/img/GalataLogo.png"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{route('default.Index')}}"> Anasayfa </a></li>
                                    <li><a href="#"> Kurumsal <i class="fa fa-caret-down"> </i></a>
                                        <ul>
                                            <li><a href="{{route('about.Index')}}">Hakkımızda</a></li>
                                            @isset($reference[0])<li><a href="{{route('ref.Index')}}">Referanslar</a></li>@endisset
                                            <li><a href="{{route('about.Index')}}">Kadromuz</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Hizmetlerimiz <i class="fa fa-caret-down"> </i></a>
                                        <ul>
                                            <li><a href="#">İthalat</a>
                                                <ul>
                                                    @foreach($page as $service)
                                                        @if($service->page_category==0)
                                                            @if($service->page_status==1)
                                                        <li><a href="{{route('service.Index',$service->page_slug)}}">{{$service->page_title}}</a></li>
                                                        @endif
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#">İhracat</a>
                                                <ul>
                                                    @foreach($page as $service)
                                                        @if($service->page_category==1)
                                                            @if($service->page_status==1)
                                                        <li><a href="{{route('service.Index',$service->page_slug)}}">{{$service->page_title}}</a></li>
                                                        @endif
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('contact.Index')}}">İLETİŞİM</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    </header>
    <!-- End Header Area -->

    @yield('content')

    <!-- Main Footer Area Start -->
    <footer>
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="single-footer">
                                <h2>İLETİŞİM BİLGİLERİ</h2>
                                <p>Galata İhracat & Danışmanlık</p>
                                <div class="footer-informations">
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i><span>{{$adres}}</span></li>
                                        <li><i class="fa fa-phone"></i><span>{{$phone_gsm}}</span></li>
                                       @if($phone_sabit != null) <li><i class="fa fa-phone"></i><span>{{$phone_gsm}} (Sabit Telefon)</span></li> @endif
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> <span>{{$mail}}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer Area End -->
    <!-- Footer Bottom Area End -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="javascript:void(0)"><img src="/images/settings/{{$footer_logo}}" alt="Footer Logo"></a>
                    <p>&copy;2020 {{$footer}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area End -->



</div>


<!-- jquery
============================================ -->
<script src="/frontend/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="/frontend/js/bootstrap.min.js"></script>
<!--======  RS JS File   ======-->
<script type="text/javascript" src="/frontend/lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/frontend/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/lib/rs-plugin/rs.home.js"></script>
<!-- wow JS
============================================ -->
<script src="/frontend/js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="/frontend/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="/frontend/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="/frontend/js/owl.carousel.min.js"></script>
<!-- jquery.fancybox.pack js -->
<script src="/frontend/js/fancybox/jquery.fancybox.pack.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="/frontend/js/jquery.scrollUp.min.js"></script>
<!-- jquery.counterup js -->
<script src="/frontend/js/jquery.counterup.min.js"></script>
<script src="/frontend/js/waypoints.min.js"></script>
<!-- plugins JS
============================================ -->
<script src="/frontend/js/plugins.js"></script>
<!-- ScrollUp JS
============================================ -->
<script type="text/javascript" src="/frontend/js/scrollup.js"></script>
<!-- Parcircle JS
============================================ -->
<script type="text/javascript" src="/frontend/js/percircle.min.js"></script>
<!-- main JS
============================================ -->
<script src="/frontend/js/main.js"></script>
<script>
    $(document).ready(function () {
        if ($('h1:first').text() != '') {
            document.title = $('h1:first').text();
        } else if ($('h2:first').text() != '') {
            document.title = $('h2:first').text();
        }
    });
</script>
</body>
</html>
