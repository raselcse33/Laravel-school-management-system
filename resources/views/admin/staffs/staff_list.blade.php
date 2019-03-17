@extends('admin.home')
@section('headTitle')
List Staff's
@endsection
@section('content')
<div class="container"
     <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Image </th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                            <tr>
                                <td>01</td>
                                <td>{{$staff->name}}</td>
                                <td>{{$staff->designation}}</td>
                                <td><img src="{{asset('public/images/staffs/image/'.$staff->image)}}" style="max-width:90px;min-height:90px;" alt="{{-- {{$teacher->name}} --}}" width="100%"></td>
                                <td>{{$staff->phone_number}}</td>
                                
                                <td>
                                    <a href="{{route('edit.staff',$staff->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('view.staff',$staff->id)}}" class="btn btn-info btn-sm mb-1">View</a>
                                    <a href="{{-- {{route('teacher.delete',$teacher->id)}} --}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
                               </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$staffs->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection