<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <title>@yield('title')</title>
  <link href="{{URL::asset('publicAssets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />
  <link href="{{URL::asset('publicAssets/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link rel="preconnect" href="{{URL::asset('https://fonts.gstatic.com')}}" />
  <link
          href="{{URL::asset('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap')}}"
          rel="stylesheet"
  />
  <link rel="stylesheet" href="{{URL::asset('publicAssets/css/slick.css')}}" />
  @toastr_css
  <link href="{{URL::asset('publicAssets/css/mainStyle.css')}}" rel="stylesheet" />

</head>
<body>
@yield('navbar')
@yield('content')
@yield('footer')
@yield('footerScript')