<aside id="sidebar-left" class="sidebar-left mb-5">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <!--                    <li class="nav-active">
                                            <a class="nav-link" href="{{route('home')}}">
                                                <i class="fas fa-home" aria-hidden="true"></i>
                                                <span>Dashboard</span>
                                            </a>                        
                                        </li>-->
                    <li class="nav-parent ">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cogs" aria-hidden="true"></i>
                            <span>Settings</span>
                        </a> 
                        <ul class="nav nav-children ">
                            <li><a class="nav-link" href="{{url('setting/create')}}">Basic Settings</a></li>
                            <li><a class="nav-link" href="{{url('system/setting/create')}}">System Settings</a></li>
                            <li><a class="nav-link" href="{{url('db/setting/create')}}">DB Settings</a></li>
                            <li><a class="nav-link" href="{{url('class/create')}}">Classes</a></li>
                            <li><a class="nav-link" href="{{route('section.create')}}">Sections</a></li>
                            <li><a class="nav-link" href="{{route('group.create')}}">Groups</a></li>
                            <li><a class="nav-link" href="{{url('subject/add')}}">Subjects</a></li>
                            <li><a class="nav-link" href="{{url('gpa/mark/add')}}">Gpa Ranges</a></li>
                            <li><a class="nav-link" href="{{route('exam.create')}}">Add Exam Name</a> </li>
                            <li><a class="nav-link" href="{{route('slide.create')}}">Sliders</a> </li>
                            <li><a class="nav-link" href="{{route('gallary.create')}}">Gallary</a> </li>
                            <li><a class="nav-link" href="{{route('routine.create')}}">Class Routine</a> </li>
                            <li><a class="nav-link" href="{{route('exam_routine.create')}}">Exam Routine</a> </li>
                            <li><a class="nav-link" href="{{route('academic.calender.add')}}">Academic calendar</a> </li>
                            <li><a class="nav-link" href="{{url('subject/mark/add')}}">Marks Setting</a> </li>
                            <li><a class="nav-link" href="{{route('subject.mark.list')}}">Marks Setting List</a></li>
                            <li><a class="nav-link" href="{{route('useful_link.create')}}">Useful Links</a></li>
                            <li><a class="nav-link" href="{{route('pass_mark.create')}}">Select the Passmark</a></li>
                            <li><a class="nav-link" href="{{route('result_date.create')}}">Result Published Date</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-tie" aria-hidden="true"></i>
                            <span>Managing Committee</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('managing.committee.create')}}">Add New Managing Committee</a></li>
                            <li><a class="nav-link" href="{{route('managing.committee.list')}}">List Managing Committee</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-tie" aria-hidden="true"></i>
                            <span>Teachers</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{url('teacher/create')}}">Add New Teacher</a></li>
                            <li><a class="nav-link" href="{{route('teacher.manage')}}">All Teachers</a></li>
                            <li><a class="nav-link" href="{{route('class.teacher')}}">Select Class Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-edit" aria-hidden="true"></i>
                            <span>Students</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{url('student/create')}}">Add New Student </a></li>
                            <li><a class="nav-link" href="{{route('list.student')}}">Students Basic info List</a></li>
                             <li><a class="nav-link" href="{{route('search.student')}}"> Students Search </a></li>
                            <li><a class="nav-link" href="{{route('student.academic')}}">Students Academic List</a></li>
                            <li><a class="nav-link" href="{{route('student.subject')}}">Students subject List</a></li>
                            <li><a class="nav-link" href="{{route('admission.student.list')}}">Admission Students List</a></li>
                            <li><a class="nav-link" href="{{route('successful.student')}}">Add Successful student</a></li>
                            <li><a class="nav-link" href="{{route('create.student.id')}}">Student Id</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-paper-plane" aria-hidden="true"></i>
                            <span>Page</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('pages/create')}}">
                                    Add New Page 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('list.page')}}">
                                    All Pages
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sticky-note" aria-hidden="true"></i>
                            <span>Post</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('posts/create')}}">
                                    Add New Post 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('list.post')}}">
                                    All Posts
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-edit" aria-hidden="true"></i>
                            <span>Exam Mark</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('marks/add')}}">
                                    Add Subject's Mark 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('marks.view')}}">
                                    Edit Subject's Mark
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('students.marks.view')}}">
                                    All Student Mark's
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('join.marks')}}">
                                    Add Join marks
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('join.marks.view')}}">
                                    List Join marks 
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-door-open" aria-hidden="true"></i>
                            <span>Result</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('result/view')}}">
                                    Filter Result
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('class.results')}}">
                                    Filter Class Result
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file-alt " aria-hidden="true"></i>
                            <span>Admit Card</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('show.admit')}}">
                                    Generate Admit Card
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-plus-circle " aria-hidden="true"></i>
                            <span>Exam Seat Planing</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('seat.plane')}}">
                                    Seat plaining
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks " aria-hidden="true"></i>
                            <span>Student Attendance</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    Add Attendance 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('edit_students.attendance')}}">
                                    Edit Attendance 
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks " aria-hidden="true"></i>
                            <span>SMS</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    All Student 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    All Teacher 
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    All Staff 
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-comment " aria-hidden="true"></i>
                            <span>Testimonial</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('testimonial')}}">
                                    Download Testimonial 
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-certificate " aria-hidden="true"></i>
                            <span>Certificate</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('certificate')}}">
                                    Download Certificate  
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-exchange-alt " aria-hidden="true"></i>
                            <span>Transfer Certificate</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('transfer.certificate')}}">
                                    Download TC  
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-alt" aria-hidden="true"></i>
                            <span>Staff</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{url('staff/add')}}">
                                    Staff Add
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('list.staff')}}">
                                    View Staff 
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fas fa-align-left" aria-hidden="true"></i>
                            <span>Account Management</span>
                        </a>
                        <ul class="nav nav-children" style="">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    Students Account
                                </a>
                                <ul class="nav nav-children" style="">
                                    <li>
                                        <a href="#">
                                            Add Monthly Fee
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            View Monthly Fee
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-children" style="">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    teachers and stuffs  Account
                                </a>
                                <ul class="nav nav-children" style="">
                                    <li>
                                        <a href="#">
                                            Pay Salary
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            remaining Salary
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-children" style="">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    school account
                                </a>
                                <ul class="nav nav-children" style="">
                                    <li>
                                        <a href="#">
                                            previous fund
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            School spend
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            school income/donation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            view account fund and other
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks " aria-hidden="true"></i>
                            <span>Teacher Attendance</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    Add Attendance 
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks " aria-hidden="true"></i>
                            <span>stuff Attendance</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{route('students.attendance')}}">
                                    Add Attendance 
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
            <hr class="separator" />
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>


    </div>

</aside>