@extends('admin.home')
@section('headTitle')
Managing Committee
@endsection
@section('content')

<div class="row grid-margin">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Edit Managing Committee</h3>
                
                {{ Form::open(['route'=>'managing.committee.update','method'=>'post','enctype'=>'multipart/form-data'])}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="col-form-label">Full Name</label>
                            <input type="text" name="name" value="{{$managing_committee->name}}" class="form-control" placeholder="Name" required>
                            <input type="hidden" name="committeeId" value="{{$managing_committee->id}}" class="form-control" placeholder="Name" required>
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
                            <input type="text" name="designation" value="{{$managing_committee->designation}}" class="form-control" placeholder="Designation" required>
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
                            <textarea class="form-control" name="address" required>{{$managing_committee->address}} </textarea>
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
                            <input type="text" name="phone" value="{{$managing_committee->phone}}" class="form-control" required>
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
                            <input type="date" name="start_time" value="{{$managing_committee->start_time}}" class="form-control" required>
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
                            <input type="date" name="end_time" value="{{$managing_committee->end_time}}"  class="form-control" placeholder="Phone Number" required=>
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
                            <input type="file" name="image" class="form-control mb-3" >
                            <img src="{{asset('public/images/managing_committee/'.$managing_committee->image)}}" alt="{{$managing_committee->name}}" width="120" height="120"/>
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
