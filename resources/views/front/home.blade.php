@include('front.includes.head')
<body>
	<!--start header -->
	@include('front.includes.header')
    @yield('marquee')
	<!--end header -->
	<div class="container">
	  <div class="row">
		<!-- main content start-->
	     <div  class="col-sm-12 col-md-9 col-lg-9 pt-3 ">
          @yield('content')
      
        </div>
      @include('front.includes.sideber')
    </div>
   </div>
    @yield('home_content')
      @include('front.includes.footer')
      @include('front.includes.foot')
      @yield('script')

</body>




    
