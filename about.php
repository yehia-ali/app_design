<?php
include("libs/login.php");
include("libs/customer_signup.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Clothes-Shop </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="templates/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="templates/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/css/bootstrap.rtl.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="templates/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="templates/css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href=templates/"css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="templates/css/owl.theme.default.min.css">
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href="templates/css/meanmenu.min.css">
    <!-- Nivo Slider CSS-->
    <link rel="stylesheet" href="templates/lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="templates/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="templates/css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="templates/css/style.css">
    <!-- Modernizr Js -->
    <script src="templates/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="wrapper-area">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Header Area Start Here -->
    <header>
        <div class="header-area-style2" id="sticker">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="account-wishlist">
                                <ul>
                                    <!-- Button trigger modal -->
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter1"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل</a></li>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-in" aria-hidden="true"></i> دخول</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <ul class="header-cart-area">

                                <li>
                                    <div class="cart-area">
                                        <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="img/logo2.png" alt="logo"></a>
                            </div>
                            <div class="main-menu-area home2-sticky-area">
                                <nav>
                                    <ul>
                                        <li ><a href="index.php">الرئيسة</a>
                                        </li>
                                        <li><a href="shop2.php">اولاد</a></li>
                                        <li><a href="shop1.php">بنات</a></li>
                                        <li><a href="about.php">من نحن</a></li>
                                        <li><a href="contact.php">اتصل بنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start Here -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li ><a href="index.php">الرئيسة</a>
                                            </li>
                                            <li><a href="shop2.php">اولاد</a></li>
                                            <li><a href="shop1.php">بنات</a></li>
                                            <li><a href="about.php">من نحن</a></li>
                                            <li><a href="contact.php">اتصل بنا</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكتروني">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">الرقم السري</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السري">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                        <button type="submit" name="login" class="btn btn-primary">دخول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="الاسم الاول">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="text" name="mi" class="form-control" placeholder="الوسط">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="الاسم الاخير">
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <input type="email"  name="email" class="form-control" placeholder="البريد الالكتروني">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="الرقم السري">
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <input name="address" type="text" class="form-control" placeholder="العنوان">
                                    </div>
                                </div>
                                <div class=" col-xs-4">
                                    <div class="form-group">
                                        <input type="text" name="zipcode" class="form-control" placeholder="كود البريد">
                                    </div>
                                </div>
                                <div class=" col-xs-6">
                                    <div class="form-group">
                                        <input type="tel" name="mobile" class="form-control" placeholder="الموبايل">
                                    </div>
                                </div>
                                <div class=" col-xs-6">
                                    <div class="form-group">
                                        <input type="tel" name="telephone" class="form-control" placeholder="التليفون">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                        <button type="button" class="btn btn-primary">حفظ </button>
                    </div>
                </div>
            </div>
        </div>
    </header>        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>من نحن </h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- About Us Page Area Start Here -->
        <div class="about-us-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="about-us-page-left">
                            <a href="#"><img src="templates/img/" alt="about" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="about-us-page-right">
                            <h2>من نحن</h2>
                            <p>
                                <span>يعد متجر ABITOO من البائعين بالجملة لمخزون التصفيات ومخزون ملابس العلامات التجارية والملابس العادية والأحذية والملابس الداخلية والإكسسوارات من فائض وآخر بواقي الملابس. منذ عام 2005 ونحن نوزع بنجاح البضائع الفائضة من مصنعي الأزياء في أوروبا الغربية إلى مناطق خارج حدود مبيعاتهم. هل تبحث عن تاجر بالجملة لمخزون الملابس عبر الإنترنت؟ أنشئ حسابًا مجانيًا على !
.</span>
                            </p>
                            <p>متجرنا الإلكتروني لمخزون الملابس وابحث عن أفضل الصفقات للملابس والأحذية والملابس الداخلية والإكسسوارات من علامات تجارية مشهورة وبخصومات تصل إلى 90%</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- About Us Page Area End Here -->
        <!-- Expert Team Area Start Here -->
        <div class="expert-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <span class="title-bar-left"></span>
                            <h2>فريق الخبراء</h2>
                            <span class="title-bar-right"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="expert-team-box">
                            <div class="team-img-holder">
                                <a href="#"><img src="templates/img/team/1.jpg" alt="team" class="img-responsive"></a>
                            </div>
                            <div class="team-content-holder">
                                <h3><a href="#"> احمد</a></h3>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="expert-team-box">
                            <div class="team-img-holder">
                                <a href="#"><img src="templates/img/team/1.jpg" alt="team" class="img-responsive"></a>
                            </div>
                            <div class="team-content-holder">
                                <h3><a href="#"> احمد</a></h3>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="expert-team-box">
                            <div class="team-img-holder">
                                <a href="#"><img src="templates/img/team/1.jpg" alt="team" class="img-responsive"></a>
                            </div>
                            <div class="team-content-holder">
                                <h3><a href="#"> احمد</a></h3>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="expert-team-box">
                            <div class="team-img-holder">
                                <a href="#"><img src="templates/img/team/1.jpg" alt="team" class="img-responsive"></a>
                            </div>
                            <div class="team-content-holder">
                                <h3><a href="#"> احمد</a></h3>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Expert Team Area End Here -->
        <!-- Advantage2 Area Start Here -->
        <div class="advantage2-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="flaticon-truck"></i>
                                </a>
                                <div class="media-body">
                                    <h3>الشحن مجانا</h3>
                                    <p>على جميع الطلبات</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="flaticon-headphones"></i>
                                </a>
                                <div class="media-body">
                                    <h3>خدمة 24 ساعة </h3>
                                    <p>احصل على مساعدة عند الحاجة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="flaticon-reload"></i>
                                </a>
                                <div class="media-body">
                                    <h3>إرجاع النقود</h3>
                                    <p>ضمن 30 يوم ضمان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advantage2 Area End Here -->
       <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area">
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Information</h3>
                                    <ul class="info-list">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Manufacturers</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Terms & condition</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>My Account</h3>
                                    <ul class="info-list">
                                        <li><a href="login-registration.html">My Account</a></li>
                                        <li><a href="login-registration.html">Login</a></li>
                                        <li><a href="wishlist.html">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="cart.html">View Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Product Tag</h3>
                                    <ul class="tag-list">
                                        <li><a href="#">Winter</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Denime</a></li>
                                        <li><a href="#">Summer Style</a></li>
                                        <li><a href="#">Leather</a></li>
                                        <li><a href="#">Dress</a></li>
                                        <li><a href="#">Dress</a></li>
                                        <li><a href="#">Summer Style</a></li>
                                        <li><a href="#">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Stay With Us</h3>
                                    <p>Tmply dummy text of the printing and typesetting industry nummy ever.</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="newsletter-area">
                                        <h3>NewsLetter Sign Up!</h3>
                                        <div class="input-group stylish-input-group">
                                            <input type="text" class="form-control" placeholder="E-mail . . .">
                                            <span class="input-group-addon">
                                                    <button type="submit">
                                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </button>  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <p>© 2016 Spectra All Rights Reserved. Designed by<a href="http://spectraapps.com" target="_blank"> SpectraApps</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <ul class="payment-method">
                                    <li>
                                        <a href="#"><img src="img/payment-method1.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method2.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method3.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method4.jpg" alt="payment-method"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Dialog Box Start Here-->
    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="templates/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="templates/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="templates/js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="templates/lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="templates/lib/custom-slider/home.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="templates/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="templates/js/wow.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="templates/js/plugins.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="templates/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="templates/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="templates/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="templates/js/main.js" type="text/javascript"></script>
</body>

</html>
