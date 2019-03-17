@extends('admin.home')
@section('headTitle')
Teacher
@endsection
@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card mb-5">
			<div class="card-body">
    		
        <form action="{{route('teacher.update',['id'=>$teacher->id])}}" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        <div class="row">
			  <div class="col-sm-6">
			  	 <div class="form-group">
				    <label class="font-weight-bold" for="teacherName">Personal Information</label>
				  </div>
				 <div class="form-group">
				    <label for="teacherName">Full Name</label>
							<input type="text" class="form-control"  name="name" value="{{$teacher->name}}" required>
				     <small class="text-danger">{{ $errors->first('name') }}</small>
				  </div>
				   <div class="form-group">
				    <label for="teacherName">Date Of Birth</label>
				   <input type="date" class="form-control" name="dateTime"  value="{{$teacher->dateTime}}" required>
				    <small class="text-danger">{{ $errors->first('dateTime') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Contuct Number</label>
				    <input type="text" class="form-control"  name="contuctNumber" value="{{$teacher->contuctNumber}}" required>
				    <small class="text-danger">{{ $errors->first('contuctNumber') }}</small>
				  </div>

				   <div class="form-group">
				    <label for="teacherName">Email Address</label>
				    <input type="text" class="form-control"  name="emailAddress" value="{{$teacher->emailAddress}}" required="1">
				     <small class="text-danger">{{ $errors->first('emailAddress') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Permanent Addres</label>
				    <textarea class="form-control" name="address" rows="3"  required="1">{{$teacher->address}}</textarea>
				     <small class="text-danger">{{ $errors->first('address') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">NID Number</label>
				    <input type="text" class="form-control"  name="nidNumber" value="{{$teacher->nidNumber}}" required="1">
				    <small class="text-danger">{{ $errors->first('nidNumber') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Index Number</label>
				    <input type="text" class="form-control"  name="indexNumber" value="{{$teacher->indexNumber}}" required="1">
				    <small class="text-danger">{{ $errors->first('indexNumber') }}</small>
				  </div>
			  </div>
			  <div class="col-sm-6">
				  <div class="form-group">
				    <label class="font-weight-bold" for="teacherName">Education</label>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 1</label>
				    <input type="text" class="form-control"  name="level1" value="{{$teacher->level1}}" required="1">
				    <small class="text-danger">{{ $errors->first('level1') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 2</label>
				    <input type="text" class="form-control"  name="level2" value="{{$teacher->level2}}" required="1">
				    <small class="text-danger">{{ $errors->first('level2') }}</small>
				  </div>
				  <div class="form-group">
				    <label for="teacherName">Level 3</label>
				    <input type="text" class="form-control"  name="level3" value="{{$teacher->level3}}" required="1">
				    <small class="text-danger">{{ $errors->first('level3') }}</small>
				  </div>
				   <div class="form-group">
				    <label for="teacherName">Level 4</label>
				    <input type="text" class="form-control"  name="level4" value="{{$teacher->level4}}">
				  </div>

				  <div class="form-group">
				    <label for="teacherName">Job Skills & Training</label>
				    <textarea class="form-control" name="training" rows="3" placeholder="Job Skills & Training">{{$teacher->training}}</textarea>
				  </div>
				   <div class="form-group">
						    <label for="ImageUpload">Image Upload</label>
						    <input type="file" name="image" >
								 <small class="text-danger">{{ $errors->first('image') }}</small>
					 		<img src="{{asset('public/images/teachers/'.$teacher->image)}}" alt="{{$teacher->name}}">
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
		


		