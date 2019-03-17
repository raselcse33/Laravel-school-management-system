@extends('admin.home')
@section('headTitle')
Exam Seat Plaining
@endsection
@section('content')

  			@if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif


<form action="" method="post">
	{{csrf_field()}}
	<div class="row">
	  <div class="col-sm-5">
	  <div class="form-group">
	    <label> Select Class Name</label>
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
	<div class="col-sm-2 mt-3">
	  <div class="form-group">
		<button name="submit" class="btn btn-success mt-3 btn-lg">Submit</button> 
	</div>
	</div>
   </div>
  
</form>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection