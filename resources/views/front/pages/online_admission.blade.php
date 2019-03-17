@extends('front.home')

@section('content')
<section class="blog-page-section spad pt-0">
<div class="container">
	<h3 class="text-center mt-5"> Online Admission Form</h3>
	
		@if (Session::has('message'))
		    <div class="alert alert-success">{{ Session::get('message') }}</div>
		@endif

<form action="{{route('admission.store')}}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
	<div class="row pt-5">
	    <div class="col-sm-6">
		  	<div class="form-group">
			    <label for="name">Student's Name</label>
			    <input type="text" class="form-control"  name="name" placeholder="Enter Name" required="1">
			    <small class="text-danger">{{ $errors->first('name') }}</small>
			</div>

			<div class="form-group">
		      <label for="gender">Gender</label>
		        <select class="form-control" name="gender" required="1">
		         	<option value="">Select Gender </option>
		         	<option value="male">Male</option>
		         	<option value="female">Female</option>
		        </select>
		        <small class="text-danger">{{ $errors->first('gender') }}</small>
		    </div>

	        <div class="form-group">
		       <label for="class_name_id">Class Name</label>
		        <select class="form-control" name="class_name_id" required="1">
							 <option value="">Select Class Name</option>
							 @foreach ($classes as $class)
						   <option value="{{$class->id}}">{{$class->classNameEnglish}}</option>
							 @endforeach
		        </select>
		         <small class="text-danger">{{ $errors->first('class_name_id') }}</small>
		    </div>

			<div class="form-group">
		      <label for="student_group">Group</label>
		        <select class="form-control" name="student_group" required="1">
					<option value="">Select Group Name</option>
					@foreach ($groups as $group)
					<option value="{{$group->groupName}}">{{$group->groupName}}</option>
						@endforeach
				</select>
				  <small class="text-danger">{{ $errors->first('student_group') }}</small>
			</div>


			<div class="form-group">
			  <label for="date_time">Date of Birth</label>
			    <input type="date" class="form-control" name="date_time" required="1">
			    <small class="text-danger">{{ $errors->first('date_time') }}</small>
			</div>

			<div class="form-group">
			  <label for="nationality">Nationality</label>
			    <input type="text" class="form-control"  name="nationality" placeholder="Enter Nationality" required="1">
			    <small class="text-danger">{{ $errors->first('nationality') }}</small>
			</div>

			<div class="form-group">
			  <label for="father_name">Father's name</label>
			    <input type="text" class="form-control"  name="father_name" placeholder="Enter Father Name" required="1">
			    <small class="text-danger">{{ $errors->first('father_name') }}</small>
			</div>
		</div> 

		<div class="col-sm-6">

			<div class="form-group">
			  <label for="mother_name">Mother's name</label>
			    <input type="text" class="form-control"  name="mother_name" placeholder="Enter Mother Name" required="1">
			    <small class="text-danger">{{ $errors->first('mother_name') }}</small>
			</div>

			<div class="form-group">
			  <label for="occupation">Guardian's Occupation</label>
			    <input type="text" class="form-control"  name="occupation" placeholder="Enter Occupation Name" required="1">
			    <small class="text-danger">{{ $errors->first('occupation') }}</small>
			</div>
			  
			<div class="form-group">
			  <label for="present_address">Present Address*</label>
			    <textarea class="form-control" name="present_address" rows="3" required="1"></textarea>
			    <small class="text-danger">{{ $errors->first('present_address') }}</small>
			</div>


			<div class="form-group">
			  <label for="permanent_address">Permanent Address*</label>
			    <textarea class="form-control" name="permanent_address" rows="3" required="1"></textarea>
			    <small class="text-danger">{{ $errors->first('permanent_address') }}</small>
			</div>

			<div class="form-group">
			  <label for="contuct_number">Contuct number</label>
			    <input type="text" class="form-control"  name="contuct_number" placeholder="Enter Contuct number" required="1">
			    <small class="text-danger">{{ $errors->first('contuct_number') }}</small>
			</div>

			<div class="form-group">
			  <label for="image">Image Upload</label>
			    <input type="file" name="image" required="1">
			    <small class="text-danger">{{ $errors->first('image') }}</small>
			</div>	
		</div>
	</div>

	<div class="form-group">
	    <button type="submit" class="btn btn-success mt-3 mb-3">Submit</button>
	</div>
</form>
</div>
</section>    
@endsection