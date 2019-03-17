@extends('admin.home')
@section('headTitle')
Update GPA Range
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3>Update GPA Range</h3>
                @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
              {{ Form::open(['route'=>'gpa.update','method'=>'post','enctype'=>'multipart/form-data'])}}
             
            <div class="form-group row">
              <div class="col-lg-3">
                
                <label class="col-form-label">Marks Range</label>
              </div>
              <div class="col-lg-8">
                  <input type="number" name="markRange"  value="{{$gpa_range->markRange}}" class="form-control" required>
                  <input type="hidden" name="markRangeId"  value="{{$gpa_range->id}}" class="form-control">
                @if ($errors->has('markRange'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('markRange') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Grade</label>
              </div>
              <div class="col-lg-8">
                  <input type="text" name="grade" value="{{$gpa_range->grade}}" class="form-control" required>
                @if ($errors->has('grade'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('grade') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">GPA</label>
              </div>
              <div class="col-lg-8">
                  <input type="number" step="any" value="{{$gpa_range->gpa}}" name="gpa" class="form-control"required>
                @if ($errors->has('gpa'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('gpa') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            
            <div class="form-group row ">
              <div class="col-lg-3">
              </div>
              <div class="col-lg-8">
               {{Form::submit('Create GPA',['class'=>'btn btn-success mr-2'])}}
              </div>
            </div>
           {{Form::close()}}
          </div>
            </div>
        </div>
    </div>
</section>
@endsection
