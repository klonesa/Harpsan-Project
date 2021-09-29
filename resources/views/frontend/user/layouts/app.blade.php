<!DOCTYPE html>
<html class="loading" lang="TR" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description', GeneralSiteSettings(" site_meta_description"))">
<meta name="keywords" content="{{GeneralSiteSettings('site_key_keywords')}}" />
<title>@yield('title', GeneralSiteSettings('site_title'))</title>
<meta name="author" content="@yield('meta_author', 'kodatik.com')">
@yield('meta')
<link rel="stylesheet" type="text/css"  href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="144x144">
<link href="https://fonts.googleapis.com/css?family=Helvetica:300,400,500,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<script src="https://cdn.tiny.cloud/1/trrk14o6y1iqza8jpleitgq81i52dcftkecin2tnnz5ac5np/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Themedya Creative',
   });
  </script>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"
    type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all"
    rel="stylesheet" type="text/css" />
@yield('some-css')
<style>
     body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul,
    li,
    p,
    a,
    td {
       font-family: 'Big Caslon', sans-serif !important;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css"   href="{{asset('backend/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
<link rel="stylesheet" type="text/css"  href="{{asset('backend/app-assets/vendors/css/extensions/tether.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
<link rel="stylesheet" href="{{asset('backend/dropify/css/dropify.min.css') }}">
    @langrtl


<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/components.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css') }}">
<link rel="stylesheet" type="text/css"  href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.min.css') }}">
<link rel="stylesheet" type="text/css"  href="{{asset('backend/app-assets/css-rtl/pages/dashboard-analytics.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/custom-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style-rtl.css') }}">
    @else
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css') }}">

    @endlangrtl
</head>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
   @include('frontend.user.includes.header')
   @include('frontend.user.includes.sidebar')
   <div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
   {{-- {!! Breadcrumbs::render() !!} --}}
   <div class="content-body">
   @include('includes.partials.read-only')
   @include('includes.partials.logged-in-as')
   @include('includes.partials.messages')
   @yield('content')
   </div>
   </div>
   </div>
   @include('frontend.user.includes.footer')
   @yield('script')
   @yield('some-js')   </body>
   </html>
   
   