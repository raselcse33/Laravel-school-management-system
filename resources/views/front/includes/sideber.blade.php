	<!-- sideber content start-->
	<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 pl-0 pt-3">
		<!-- Map content start-->
    @if($system_setting->map==null)
       <div class="card card-default">
           <div style="background: no-repeat;" class="card-header p-0">
                  <iframe src="{{$setting->mapurl}}" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
            </div>
             <div class="card-body map">
                <ul class="address">
                	<li class="address-li">Established:</li>
                	<li class="address-li">{{$setting->eastablished}}</li>
                </ul>
                <ul class="address">
                	<li class="address-li">Phone :</li>
                	<li class="address-li">{{$setting->telephone_number}}</li>
                </ul>
                <ul class="address">
                	<li class="address-li">Addres:</li>
                	<li class="address-li">{!!$setting->address!!}</li>
                </ul>
            </div>
        </div>
        @endif
        <!-- Map content end-->

         <!-- use full link start-->
        <div class="card card-default mt-3">
          <div class="card-header usefull-link">
               <h3 class="text-center usefull-link">Usefull Link</h3>
           </div>
            <div class="card-body usefull-link">
              <ul class="list-inline">
         		<li>
         			<i class="fa fa fa-angle-right"></i>
         			<a class="useful-link" target="_blank" href="http://www.techedu.gov.bd" target="_blank">Education Board BD</a>
         		</li>
         		<li>
         			<i class="fa fa fa-angle-right"></i>
         			<a class="useful-link" target="_blank" href="http://www.techedu.gov.bd" target="_blank">Dhaka University</a>
         		</li>
         		<li>
         			<i class="fa fa fa-angle-right"></i>
         			<a class="useful-link" target="_blank" href="http://www.techedu.gov.bd" target="_blank">BUET</a>
         		</li>
         		<li>
         			<i class="fa fa fa-angle-right"></i>
         			<a class="useful-link" target="_blank" href="http://www.techedu.gov.bd" target="_blank">DMC</a>
         		</li>
         		<li>
         			<i class="fa fa fa-angle-right"></i>
         			<a class="useful-link" target="_blank" href="http://www.techedu.gov.bd" target="_blank">DIU</a>
         		</li>
              </ul>
            </div>
        </div>
        <!-- use full link end-->

         <!-- Notice Board link  start-->
        <div class="card card-default mt-3">
          <div class="card-header event">
               <h3 class="text-center event">Event</h3>
           </div>
            <div class="card-body event event-h">
              <marquee height="200" direction=up  scrolldelay=300>
                @foreach($posts as $post)
              	<a class="event" href="{{ url('show/event')}}">{{$post->title}}</a>
              	<hr>
                @endforeach
              </marquee>
            </div>
        </div>
        <!--Notice Board link end-->

        <!-- Visitor  start-->
        <div class="card card-default mt-3 mb-4">
          <div class="card-header visitor">
               <h3 class="text-center visitor">Visitor</h3>
           </div>
            <div class="card-body visitor ">
              <ul class="list-inline">
         		<li class="d-flex justify-content-between align-items-center visitor-li">
         		  Daily Visitor
         		   <span class="badge badge-primary badge-pill">4</span>
         		</li>
         		<li class="d-flex justify-content-between align-items-center visitor-li">
         			Weak Visitor
         		   <span class="badge badge-primary badge-pill">40</span>
         		</li>
         		<li  class="d-flex justify-content-between align-items-center visitor-li">
         			Month Visitor
         		   <span class="badge badge-primary badge-pill">100</span>
         		</li>
         		<li  class="d-flex justify-content-between align-items-center visitor-li">
         			Total Visitor
         		   <span class="badge badge-primary badge-pill">14444</span>
         		</li>
              </ul>
            </div>
        </div>
        <!--Visitor end-->

	</div>
	<!-- sideber content end-->