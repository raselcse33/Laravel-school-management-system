<!--        <section class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                       <div class="card information">
                           <div class="card-body information-sub">
                               <a href="#">
                                <img src="http://www.rsths.edu.bd/feassets/images/admissionbghover.png">
                               <span>Online Application Form</span>
                             </a>
                           </div>
                       </div>
                       <div class="card information">
                           <div class="card-body information-sub">
                               <a href="#">
                                <img src="http://www.rsths.edu.bd/feassets/images/onlineformhover.png">
                                <span>Download Application Forms</span>
                              </a>
                           </div>
                       </div>
                       <div class="card information">
                           <div class="card-body information-sub">
                               <a href="#">
                                <img src="http://www.rsths.edu.bd/feassets/images/committeehover.png">
                                <span>School Management Committee</span>
                            </a>
                           </div>
                       </div>
                       <div class="card information">
                           <div class="card-body information-sub">
                               <a href="#">
                                <img src="http://www.rsths.edu.bd/feassets/images/statisticshover.png">
                                <span> Overall Analysis of Result</span>
                            </a>
                           </div>
                       </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                         <div class="card">
                             <div class="card-header text-white important-link">
                                 Important Links
                             </div>
                             <div class="card-body bg-secondary" style="padding: 12px;" >
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right fa-small"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>

                             </div>
                         </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                             <div class="card-header text-white important-link">
                                 Emergency Links
                             </div>
                             <div class="card-body bg-secondary" style="padding: 12px;">
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right fa-small"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                                 <a href="#" class="text-left btn btn-block btn-secondary"><i class="fa fa-arrow-right"></i> List One Two Three</a>
                             </div>
                         </div>
                       
                    </div>
                    
                </div>
            </div>
        </section>-->
        <!-- Newsletter section end -->	


        <!-- Footer section -->
        <footer class="footer-section">
            <div class="container footer-top">
                <div class="row">
                    <!-- widget -->
                    <div class="col-sm-6 col-lg-3 footer-widget">
                        <h6 class="fw-title">About Us</h6>
                        <div class="about-widget">
                            <ul>
                                <li><a href="{{ url('page/our-history')}}"><i class="fa fa-angle-double-right"></i> Our History</a></li>
                                <li><a href="{{ url('page/mission-vision')}}"><i class="fa fa-angle-double-right"></i> Mission & Vision</a></li>
                                <li><a href="{{ url('page/achievement ')}}"><i class="fa fa-angle-double-right"></i> Achievement & Success</a></li>
                                <li><a href="{{ url('page/infrastructure')}}"><i class="fa fa-angle-double-right"></i> Infrastructure</a></li>
                                <li><a href="{{ url('page/virtual-campus')}}"><i class="fa fa-angle-double-right"></i> Virtual Campus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 footer-widget">
                        <h6 class="fw-title">Academic</h6>
                        <div class="about-widget">
                            <ul>
                                <li><a href="{{ url('academic/calendar')}}"><i class="fa fa-angle-double-right"></i> Academic calendar</a></li>
                                <li><a href="{{ url('/page/text-book')}}"><i class="fa fa-angle-double-right"></i> Textbooks</a></li>
                                <li><a href="{{ url('academic/syllabus')}}"><i class="fa fa-angle-double-right"></i> Syllabus</a></li>
                                <li><a href="{{route('show.routine')}}"><i class="fa fa-angle-double-right"></i> Class Routine</a></li>
                                <li><a href="{{route('show.exam_routine')}}"><i class="fa fa-angle-double-right"></i> Exam Routine</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 footer-widget">
                        <h6 class="fw-title">News & Events</h6>
                        <div class="about-widget">
                            <ul>
                                <li><a href="{{ url('show/news')}}"><i class="fa fa-angle-double-right"></i> News</a></li>
                                <li><a href="{{ url('event/notice')}}"><i class="fa fa-angle-double-right"></i> Notice</a></li>
                                <li><a href="{{ url('show/event')}}"><i class="fa fa-angle-double-right"></i> Events</a></li>
                                <li><a href="{{ url('show/publication')}}"><i class="fa fa-angle-double-right"></i> Publications</a></li>
                                <li><a href="{{url('/result')}}"><i class="fa fa-angle-double-right"></i> Result</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 footer-widget">
                        <h6 class="fw-title">Admission Activities</h6>
                        <div class="about-widget">
                            <ul>
                                <li><a href="{{ url('/page/admission-information')}}"><i class="fa fa-angle-double-right"></i> Admission Information</a></li>
                                <li><a href="{{ url('/page/available-class')}}"><i class="fa fa-angle-double-right"></i> Available Class</a></li>
                                <li><a href="{{route('online.admission')}}"><i class="fa fa-angle-double-right"></i> Online Application</a></li>
                                <li><a href="{{ url('/page/scholarship')}}"><i class="fa fa-angle-double-right"></i> Scholarship</a></li>
                                <li><a href="{{route('contact.contactUs')}}"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <div class="copyright">
                <div class="container">
                    <p>© Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved. Design &amp; Developed By <a target="_blank" href="http://momtajtdpl.com.bd/">Momtaj Trading(Pvt) Ltd.</a> </p>
                </div>		
            </div>
        </footer>
        <!-- Footer section end