<!-- Page Preloder -->
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header section -->
    <header class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-phone"></i>{{$setting->phone_number}}</a>
                            <a href=""><i class="fa fa-envelope"></i>{{$setting->email}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="pull-right">
                        <ul >
                            <li class="nav-switch " >
                                <i class="fa fa-bars"></i>
                            </li>
                            <li >
                                <a href=""><i class="fa fa-facebook-official"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-section header-color header-section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 text-right" >
                    <!--<img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="" >-->
                    <a href="{{ url('/') }}"><img class="img-responsive" src="{{asset('public/images/settings/'.$setting->logo)}}" alt="" ></a>
                </div>
                <div class="col-sm-8" >
                    <div class="header-section-info text-center ">
                        @if($setting->banner)   
                        <img class="img-responsive" src="{{asset('public/images/settings/'.$setting->banner)}}" alt="" >
                        @else
                        <h4>{{$setting->name}}</h4>
                        <p>{{$setting->slogan}}<br />Established: {{$setting->eastablished}}<br />{!!$setting->address!!}</p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-2" >
                    <img class="img-responsive" src="{{asset('public/images/settings/'.$setting->flag)}}" alt="" >
                </div>

                <!--                <div class="col-sm-12" >
                                    <div class="row ">
                                        <div class="header-image text-center">
                                            <img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="" >
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="header-section-info text-center ">
                                            <h4>{{$setting->name}}</h4>
                                            <p>{!!$setting->address!!}</p>
                                            <p>Eastablished:{{$setting->eastablished}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="header-second-info text-center">
                                            <p>{{$setting->slogan}}</p>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>
    </header>


    <!-- Header section  -->
    <nav class="nav-section" id="navbar">
        <div class="container">
            {{-- <div class="nav-right">
                <a href=""><img src="{{asset('public/front/img/fb.png')}}" height="60px" width="60px" class="img-fluid" alt="Responsive image"></i></i></a>
            </div> --}}
            <ul class="main-menu">
                <li><a href="{{route('front')}}">Home</a></li>
                <li class="new">
                    <a href="">Academic <i class="fa fa-caret-down"></i></a>
                    <ul> <li><a class="dropdown-item" href="{{route('leave.application')}}">Leave Application</a></li>
                        <li><a class="dropdown-item" href="{{route('show.managing.committee')}}">Managing Committee </a></li>
                        <li><a class="dropdown-item" href="{{ url('academic/calendar')}}">Academic calendar</a></li>
                        <li><a class="dropdown-item" href="{{ url('/page/text-book')}}">Textbooks</a></li>
                        <li><a class="dropdown-item" href="{{ url('academic/syllabus')}}">Syllabus</a></li>
                         <li><a class="dropdown-item" href="{{ route('attendance.list')}}">Attendance</a></li>
                    </ul>
                </li>
                <li class="new">
                    <a href="">News & Events <i class="fa fa-caret-down"></i></a>
                    <ul>
                        <li><a  class="dropdown-item" href="{{ url('show/news')}}">News</a></li>
                        <li><a  class="dropdown-item" href="{{ url('event/notice')}}">Notice</a></li>
                        <li><a  class="dropdown-item" href="{{ url('show/event')}}">Events</a></li>
                        <li><a  class="dropdown-item" href="{{ url('show/publication')}}">Publications</a></li>
                    </ul>
                </li>
                <li class="new">
                    <a href="{{ url('/page/about-us')}}">About Us <i class="fa fa-caret-down"></i></a>
                    <ul>
                        <li><a class="dropdown-item" href="{{ url('page/our-history')}}">Our History</a></li>
                        <li><a class="dropdown-item" href="{{ url('page/mission-vision')}}">Mission & Vision</a></li>
                        <li><a class="dropdown-item" href="{{ url('page/achievement ')}}">Achievement & Success</a></li>
                        <li><a class="dropdown-item"  href="{{ url('page/infrastructure')}}">Infrastructure</a></li>
                        <li><a class="dropdown-item"  href="{{ url('page/virtual-campus')}}">Virtual Campus</a></li>
                        <li><a class="dropdown-item"  href="{{route('gallery')}}">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="{{route('online.admission')}}">Online Application</a></li>

                <li class="new"><a href="">Routine <i class="fa fa-caret-down"></i></a>
                    <ul>
                        <li><a class="dropdown-item" href="{{route('show.routine')}}">Class Routine</a></li>
                        <li><a class="dropdown-item" href="{{route('show.exam_routine')}}">Exam Routine</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/result')}}">Result</a></li>
                <li><a href="{{route('contact.contactUs')}}">Contact Us</a></li>
                <li>
                    @if(Auth::check())
                    <a href="{{ url('/login') }}">Dashboard</a> 
                    @else
                    <a href="{{ url('/login') }}">Login</a>
                    @endif

                </li>

            </ul>
        </div>
    </nav>

    <!-- Header section end -->