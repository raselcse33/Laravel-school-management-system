@extends('admin.home')
@section('headTitle')
Managing Committee
@endsection
@section('content')

<div class="row grid-margin">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Add New Managing Committee List</h3>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
                {{ Form::open(['route'=>'managing.committee.store','method'=>'post','enctype'=>'multipart/form-data'])}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="col-form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="col-form-label">Designation</label>
                            <input type="text" name="designation" class="form-control" placeholder="Designation" required>
                            @if ($errors->has('designation'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('designation') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="col-form-label">Address</label>
                            <textarea class="form-control" name="address" required></textarea>
                            @if ($errors->has('address'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" required>
                            @if ($errors->has('phone'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Start Time</label>
                            <input type="date" name="start_time" class="form-control" required>
                            @if ($errors->has('start_time'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('start_time') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">End Time</label>
                            <input type="date" name="end_time" class="form-control" placeholder="Phone Number" required=>
                            @if ($errors->has('end_time'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('end_time') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label " >Image</label>
                            <input type="file" name="image" class="form-control" >
                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group ml-3">
                        {{Form::submit('Submit',['class'=>'btn btn-success  form-control'])}}
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection