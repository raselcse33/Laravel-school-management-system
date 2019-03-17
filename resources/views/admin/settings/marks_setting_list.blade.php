@extends('admin.home')
@section('headTitle')
Student List
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>Student List</h3>
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th >Class Name</th>
                                <th >Full Mark</th>
                                <th >ca</th>
                                <th >cr</th>
                                <th >mcq</th>
                                <th >pr</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marks_list as $mark_list)
                            <tr>
                                <td>{{$mark_list->subject_english}}</td>
                                <td>{{@getClassByID($mark_list->class_id)}}</td>
                                <td>{{$mark_list->full_mark}}</td>
                                <td>{{$mark_list->ca}}</td>
                                <td>{{$mark_list->cr}}</td>
                                <td>{{$mark_list->mcq}}</td>
                                <td>{{$mark_list->pr}}</td>
                                <td>
                                    <a href="{{route('marks.setting.edit',$mark_list->id)}}" class="btn btn-success mb-1">Edit</a>
                                    
                                    <!--<a href="#" class="btn btn-danger">Delete</a>-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$marks_list->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection







