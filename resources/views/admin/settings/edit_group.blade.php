@extends('admin.home')
@section('headTitle')
Update Group
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3>Update Group</h3>
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    
                    <form action="{{route('group.update')}}" method="post" class="form-row">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label for="group">Group</label>
                            <input type="text" class="form-control" id="group"  name="groupName" value="{{$editGroup->groupName}}" required>
                            <input type="hidden" class="form-control"  name="groupId" value="{{$editGroup->id}}" >
                            <span class="text-danger "> 
                                <strong>{{ $errors->first('groupName') }}</strong> 
                            </span>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

