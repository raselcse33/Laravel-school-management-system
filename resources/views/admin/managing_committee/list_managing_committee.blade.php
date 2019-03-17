@extends('admin.home')
@section('headTitle')
Managing Committee
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Managing Committee List</h3>
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-hover text-center  ">
                        <thead>
                            <tr>
                                <th >Name</th>
                                <th >Designation</th>
                                <th >Start Time</th>
                                <th >End Time</th>
                                <th >Address</th>
                                <th >Phone Number</th>
                                <th >Image</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($managing_committee as $member)
                            <tr>
                                <td class="align-middle">{{$member->name}}</td>
                                <td class="align-middle">{{$member->designation}}</td>
                                <td class="align-middle">{{$member->start_time}}</td>
                                <td class="align-middle">{{$member->end_time}}</td>
                                <td class="align-middle">{{$member->address}}</td>
                                <td class="align-middle">{{$member->phone}}</td>
                                <td class="align-middle"><img src="{{asset('public/images/managing_committee/'.$member->image)}}" width="100" height="100" alt="{{$member->name}}"/></td>
                                <td class="align-middle"> 
                                    <a href="{{route('managging.committee.edit',$member->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('managging.committee.delete',$member->id)}}" onclick="return confirm('are you sure?') "  class="btn btn-danger">Delete</a>
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

