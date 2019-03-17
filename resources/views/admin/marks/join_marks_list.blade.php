@extends('admin.home')
@section('headTitle')
All Join marks
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Join Marks List</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!--<th >Id</th>-->
                                <th >First Subject</th>
                                <th >First Subject Code</th>
                                <th >Second Subject</th>
                                <th >Second Subject Code</th>
                                <th >New Subject</th>
                                <th >Class Name Id</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_join_marks as $view_join_mark)
                            <tr>
                                <td>{{$view_join_mark->first_subject}}</td>
                                <td>{{$view_join_mark->first_subject_code}}</td>
                                <td>{{$view_join_mark->second_subject}}</td>
                                <td>{{$view_join_mark->second_subject_code}}</td>
                                <td>{{$view_join_mark->new_subject}}</td>
                                <td>{{ @getClassByID($view_join_mark->class_name_id) }}</td>
                                <td> 
                                    <!--<a href="{{route('marks.join.edit',$view_join_mark->id)}}" class="btn btn-success">Edit</a>-->
                                    <a href="{{route('marks.join.delete',$view_join_mark->id)}}" onclick="return confirm('are you sure?') "  class="btn btn-success">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

