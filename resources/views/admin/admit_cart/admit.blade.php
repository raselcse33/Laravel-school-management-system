@extends('admin.home')
@section('headTitle')
Admit
@endsection
@section('content')

<form action="" method="post">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label>Class Name</label>
                <select class="form-control" name="className" required="1">
                    <option value="">Select Class Name</option>
                    @foreach($classname as $c)
                    <option value="{{$c->id}}">{{$c->classNameEnglish}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label>Select Exam</label>
                <select class="form-control" name="examName" required="1">
                    <option value="">Select Exam Name</option>
                    @foreach($exam as $e)	
                    <option value="{{$e->examName}}">{{$e->examName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group mt-4">
                <button type="submit" class=" btn btn-success mt-1">Submit</button> 
            </div>
        </div>
    </div>
</form>

@endsection