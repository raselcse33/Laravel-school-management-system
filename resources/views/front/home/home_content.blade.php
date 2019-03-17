@extends('front.home')
<!--start header -->
  
  <!--end header -->
  @section('marquee')
  @include('front.home.headline')
  @endsection
  @section('content')

    @include('front.home.slider')
    @include('front.home.about')
    @include('front.home.counter')
    @include('front.home.message')
    @include('front.home.attendance')
  @endsection
  @section('home_content')
  @include('front.home.teacher')
 {{--  @include('front.home.success_student') --}}
  @endsection

  

