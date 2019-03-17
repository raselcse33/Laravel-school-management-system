@extends('admin.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Managing Committees</h4>
                                    <div class="info">
                                        <strong class="amount">{{$managing_committee}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('managing.committee.list')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Students</h4>
                                    <div class="info">
                                        <strong class="amount">{{$student}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('list.student')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-4">
                <section class="card card-featured-left card-featured-warning mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-warning">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Teachers</h4>
                                    <div class="info">
                                        <strong class="amount">{{$teacher}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('teacher.manage')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-danger">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-danger">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Settings</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{url('setting/create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Classess</h4>
                                    <div class="info">
                                        <strong class="amount">{{$class}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{url('class/create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-warning">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-warning">
                                    <i class="fas fa-book-open "></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Subjects</h4>
                                    <div class="info">
                                        <strong class="amount">{{$subject}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{url('subject/add')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Sections</h4>
                                    <div class="info">
                                        <strong class="amount">{{$section}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('section.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-warning">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-warning">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Groups</h4>
                                    <div class="info">
                                        <strong class="amount">{{$group}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('group.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-book-open "></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">GPA Range</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{url('gpa/mark/add')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Exams</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('exam.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-danger">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-danger">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Sliders</h4>
                                    <div class="info">
                                        <strong class="amount">{{$slider}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('slide.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-book-open "></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Galleries</h4>
                                    <div class="info">
                                        <strong class="amount">{{$gallery}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('gallary.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Class Routines</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('routine.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-warning">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-warning">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Exam Routines</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('exam_routine.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-danger">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-danger">
                                    <i class="fas fa-book-open "></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Academic Calendars</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('academic.calender.add')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Add Mark Setting</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('subject.marks.create')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Mark Setting List</h4>
<!--                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('subject.mark.list')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Pages</h4>
                                    <div class="info">
                                        <strong class="amount">{{$page}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('list.page')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Posts</h4>
                                    <div class="info">
                                        <strong class="amount">{{$post}}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('list.post')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-warning mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-warning">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Result</h4>
<!--                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{url('result/view')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-danger mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-danger">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Class Result</h4>
<!--                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('class.results')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-info mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-info">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Admit Card</h4>
<!--                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('show.admit')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <section class="card card-featured-left card-featured-success mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-success">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Exam Seat Plane</h4>
<!--                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                    </div>-->
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('seat.plane')}}">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection