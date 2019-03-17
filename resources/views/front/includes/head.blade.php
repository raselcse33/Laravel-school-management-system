<!DOCTYPE html>
<html lang="en">
<title>@yield('tab_title')</title>
<head>
<meta charset="UTF-8">
<meta name="description" content="{{$setting->description}}">
<meta name="keywords" content="{{$setting->metakeyword}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->   
<link href="{{asset('public/images/settings/'.$setting->logo)}}" rel="shortcut icon"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/themify-icons.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/magnific-popup.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/animate.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{asset('public/front/css/style.css')}}"/>
</head>


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->