<!DOCTYPE html>
<html class="loading" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>لوحة التحكم</title>
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom-rtl.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vertical-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow font-theme">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{url('/admin/dashboard')}}"><img class="brand-logo" src="/assets/images/logo-sm.png" alt="logo">
                        <h3 class="brand-text font-theme">لوحة التحكم</h3></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="ابحث هنا...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="/assets/images/user.png" alt="avatar"><i></i></span><span class="user-name">اسم المستخدم</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ft-user"></i> ملفي الشخصي</a>
                            <a class="dropdown-item" href="#"><i class="ft-settings"></i> الإعدادات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html"><i class="ft-power"></i> خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main font-theme" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href="{{url('admin/dashboard')}}"><i class="icon-home"></i><span class="menu-title">الرئيسية</span></a>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">الاقسام</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/departments')}}">قائمة الاقسام</a></li>
                    <li><a href="{{url('admin/departments/create')}}">إضافة قسم</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">الالبومات</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/album')}}">قائمة الالبومات</a></li>
                    <li><a href="{{url('admin/album/create')}}">اضافة البوم</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">المقالات</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/articles')}}">قائمة المقالات</a></li>
                    <li><a href="{{url('admin/articles/create')}}">اضافة مقال</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">الاخبار</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/news')}}">قائمة الاخبار</a></li>
                    <li><a href="{{url('admin/news/create')}}">اضافة خبر</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">الفديوهات</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/videos')}}">قائمة الفديوهات</a></li>
                    <li><a href="{{url('admin/videos/create')}}">اضافة فديو</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">المحررين</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/editors')}}">قائمة المحررين</a></li>
                    <li><a href="{{url('admin/editors/create')}}">اضافة محرر</a></li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#"><i class="icon-speedometer"></i><span class="menu-title">الصفحات</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/pages')}}">قائمة الصفحات</a></li>
                    <li><a href="{{url('admin/pages/create')}}">اضافة صفحة</a></li>
                </ul>
            </li>
{{--            <li class="nav-item has-sub">--}}
{{--                <a href="#"><i class="icon-compass"></i><span class="menu-title">المرشدين</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li><a href="guides.html">قائمة المرشدين</a></li>--}}
{{--                    <li><a href="add-guide.html">إضافة مرشد</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item has-sub">--}}
{{--                <a href="#"><i class="icon-user"></i><span class="menu-title">العملاء</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li class="active"><a href="clients.html">قائمة العملاء</a></li>--}}
{{--                    <li><a href="add-client.html">إضافة عميل</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item has-sub">--}}
{{--                <a href="#"><i class="icon-plane"></i><span class="menu-title">الرحلات</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li><a href="trips.html">قائمة الرحلات</a></li>--}}
{{--                    <li><a href="add-trip.html">إضافة رحلة</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
@yield('content')
<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">جميع الحقوق محفوظة  &copy; 2020.</span></p>
</footer>


<!-- BEGIN VENDOR JS-->
<script src="/assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="/assets/js/app-menu.js"></script>
<script src="/assets/js/app.js"></script>
<!-- END ROBUST JS-->
</body>
</html>
