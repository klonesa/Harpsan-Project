<!doctype html>
<html lang="tr" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="144x144">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
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
        
        
        