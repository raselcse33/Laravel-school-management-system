@include('front.includes.head')
<body>
	<!--start header -->
	@include('front.includes.header')
    @yield('marquee')
	<!--end header -->
	<div class="container">
	  <div class="row">
		<!-- main content start-->
        <div class="col-md-12">
          @yield('content')
        </div>
     </div>
  </div>
    </div>
    @yield('home_content')

      @include('front.includes.footer')
      @include('front.includes.foot')
      @yield('script')
</body>




    
