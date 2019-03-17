@extends('admin.home')
@section('headTitle')
Exam Name
@endsection
@section('content')

<div class="row">
  <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
            <h3 class=" mb-3"> Edit Exam</h3>
            @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
          <form action="{{route('update.exam')}}" method="post">
                  {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputPassword1">Exam Name</label>
                <input type="text" class="form-control" name="examName" value="{{$edit_exam->examName}}" required>
                <input type="hidden" class="form-control" name="examNameId" value="{{$edit_exam->id}}">
                <span class="text-danger"> 
                    <strong> {{ $errors->first('examName') }}</strong>
                </span>
              </div>
              <button type="submit" class="btn btn-success mt-3">Submit</button>
          </form>
            </div>
        </div>
  </div>
</div>
@endsection
