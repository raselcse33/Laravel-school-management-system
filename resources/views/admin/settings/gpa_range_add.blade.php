@extends('admin.home')
@section('headTitle')
GPA Range
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h2>Add Marks Range</h2>
                @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
              {{ Form::open(['route'=>'gpa.store','method'=>'post','enctype'=>'multipart/form-data'])}}
             
            <div class="form-group row">
              <div class="col-lg-3">
                
                <label class="col-form-label">Marks Range</label>
              </div>
              <div class="col-lg-8">
                  <input type="number" name="markRange" placeholder="Enter Mark Range" class="form-control" required>
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
                  <input type="text" name="grade" placeholder="Enter Grade" class="form-control" required>
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
                  <input type="number" step="any" name="gpa"  placeholder="Enter GPA" class="form-control" required>
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
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h3>All Grade Point</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Range</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Point</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gpa_ranges as $gpa_range)
                                <tr>
                                    <td>{{ $gpa_range->id }}</td>
                                    <td>{{ $gpa_range->markRange }}</td>
                                    <td>{{ $gpa_range->grade }}</td>
                                    <td>{{ $gpa_range->gpa }}</td>
                                    <td>
                                        <a href="{{route('gpa.range.edit',$gpa_range->id)}}" class="btn btn-success">Edit</a>
                                         <a href="{{route('gpa.range.delete',$gpa_range->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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