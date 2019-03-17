@extends('admin.home')
@section('headTitle')
Exam Name
@endsection
@section('content')
	

<div class="row">
  <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
            <h3 class=" mb-3"> Add New Exam</h3>
            @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
          <form action="{{route('exam.store')}}" method="post">
                  {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputPassword1">Exam Name</label>
                <input type="text" class="form-control" name="examName" placeholder="Enter Exam Name" required>
                <span class="text-danger"> 
                    <strong> {{ $errors->first('examName') }}</strong>
                </span>
              </div>
              <button type="submit" class="btn btn-success mt-3">Submit</button>
          </form>
            </div>
        </div>
  </div>
  <div class="col-sm-6">
      <div class="card">
          <div class="card-body">
              <h3>All Exam</h3>
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Exam</th>
                          <th scope="col">Action</th> 
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($exams as $exam)
                      <tr>
                          <td>{{ $exam->id }}</td>
                          <td>{{ $exam->examName }}</td>
                          <td>
                              <a href="{{route('exam/edit',$exam->id)}}" class="btn btn-success">Edit</a>
                              <a href="{{route('exam.delete',$exam->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection