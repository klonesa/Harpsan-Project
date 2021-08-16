<!doctype html>
<html lang="tr" dir="ltr">

<!-- Mirrored from gyiad.org.tr/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Aug 2021 07:21:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="144x144">
    <meta name="author" content="@yield('meta_author', 'IBDA By kodatik.com')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="ta4quNci4hT8RcQFRS8ur1FXvVdhZGzIE3j2KOHb">

    <title>@yield('title', GeneralSiteSettings('site_title') )</title>
    <meta name="description" content="@yield('meta_description', GeneralSiteSettings("site_meta_description"))">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="icon-200.png">
    <link rel="canonical" href="index.html">

    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="GYİAD">
    <meta property="og:image" content="gyiad-og.jpg">
    <meta name="description" content="@yield('meta_description', GeneralSiteSettings("site_meta_description"))">
    <meta property="og:site_name" content="GYİAD">
    <meta property="og:locale" content="tr">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    @yield('css')

        <link rel="stylesheet" href="{{asset('frontend/css/app.css')}}" />
        <link href="{{asset('frontend/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
<script  src="{{asset('frontend/js/jquery-2.2.4.min.js') }}" ></script>
<script  src="{{asset('frontend/js/jquery-ui.min.js') }}" ></script>

<script  src="{{asset('frontend/js/bootstrap.min.js') }}" ></script>
 <script  src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" ></script>
<script  src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" ></script>
        <script src="{{asset('frontend/js/app.js')}}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>     
            <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>     

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @yield('meta')
        @section('head')
        @endsection
       
    </head>

    <body>
        
        <div id="wrapper" class="clearfix">
        
        @include('frontend.includes.header')
        @include('includes.partials.logged-in-as')
        <div class="main-content">
        
        @include('includes.partials.messages')
        @yield('content')
        @include('includes.partials.ga')
        </div>
        @include('frontend.includes.footer')

        </div>
        @yield('js')
           </body>
        </html>
        
        
        