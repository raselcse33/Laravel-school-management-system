@extends('admin.home')
@section('headTitle')
Teacher
@endsection
@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card mb-5">
			<div class="card-body">
    		@if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        <form action="{{route('insert.teacher')}}" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        <div class="row">
			  <div class="col-sm-6">
			  	 <div class="form-group">
				    <label class="font-weight-bold" for="teacherName">Personal Information</label>
				  </div>
				 <div class="form-group">
				    <label for="teacherName">Full Name</label>
				    <input type="text" class="form-control"  name="name" placeholder="Enter Name" required="1">
				     <small class="text-danger">{{ $errors->first('name') }}</small>
				  </div>
				   <div class="form-group">
				    <label for="teacherName">Date Of Birth</label>
				   <input type="date" class="form-control" name="dateTime" required="1">
				    <small class="text-danger">{{ $errors->first('dateTime') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Contuct Number</label>
				    <input type="text" class="form-control"  name="contuctNumber" placeholder="Enter Contuct Number" required="1">
				    <small class="text-danger">{{ $errors->first('contuctNumber') }}</small>
				  </div>

				   <div class="form-group">
				    <label for="teacherName">Email Address</label>
				    <input type="text" class="form-control"  name="emailAddress" placeholder="Enter Email Address" required="1">
				     <small class="text-danger">{{ $errors->first('emailAddress') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Permanent Addres</label>
				    <textarea class="form-control" name="address" rows="3" placeholder="Enter Full Address" required="1"></textarea>
				     <small class="text-danger">{{ $errors->first('address') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">NID Number</label>
				    <input type="text" class="form-control"  name="nidNumber" placeholder="Enter NID Number" required="1">
				    <small class="text-danger">{{ $errors->first('nidNumber') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Index Number</label>
				    <input type="text" class="form-control"  name="indexNumber" placeholder="Enter Index Number" required="1">
				    <small class="text-danger">{{ $errors->first('indexNumber') }}</small>
				  </div>
			  </div>
			  <div class="col-sm-6">
				  <div class="form-group">
				    <label class="font-weight-bold" for="teacherName">Education</label>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 1</label>
				    <input type="text" class="form-control"  name="level1" placeholder="SSC" required="1">
				    <small class="text-danger">{{ $errors->first('level1') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 2</label>
				    <input type="text" class="form-control"  name="level2" placeholder="HSC" required="1">
				    <small class="text-danger">{{ $errors->first('level2') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 3</label>
				    <input type="text" class="form-control"  name="level3" placeholder="BBA,BSC,BA" required="1">
				    <small class="text-danger">{{ $errors->first('level3') }}</small>
				  </div>
				   <div class="form-group">
				    <label for="teacherName">Level 4</label>
				    <input type="text" class="form-control"  name="level4" placeholder="Masters">
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Job Skills & Training</label>
				    <textarea class="form-control" name="training" rows="3" placeholder="Job Skills & Training"></textarea>
				  </div>
				   <div class="form-group">
						    <label for="ImageUpload">Image Upload</label>
						    <input type="file" name="image" required="1">
						     <small class="text-danger">{{ $errors->first('image') }}</small>
					</div>
			  </div>
			</div>
			<div style="margin-top: 10px;" class="mb-5"></div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>
			</div>
		</div>
	</div>
</div>
@endsection
		


		