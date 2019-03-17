@extends('admin.home')
@section('headTitle')
Group
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <h3>Add New Group</h3>
                    <form action="{{route('group.store')}}" method="post" class="form-row">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label for="group">Group</label>
                            <input type="text" class="form-control" id="group"  name="groupName" placeholder="Enter Group" required>
                            @if ($errors->has('groupName'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('groupName') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h3>All Group</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Group Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->groupName }}</td>
                                    <td>
                                        <a href="{{route('group.edit',$group->id)}}" class="btn btn-success">Edit</a>
                                         <a href="{{route('group.delete',$group->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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
</div>
</section>
@endsection