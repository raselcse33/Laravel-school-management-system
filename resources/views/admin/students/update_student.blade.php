@extends('admin.home')
@section('headTitle')
Student  
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-2">Update Student</h5>
                <form action="{{route('update.student',['id'=>$student->id])}}" method="post"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="StudentName">Student's Name *</label>
                                <input type="text" class="form-control" id="studentName" name="name" value="{{$student->name}}" required>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="StudentName">Student's Id *</label>
                                <input type="text" class="form-control" id="student_id" name="student_id" value="{{$student->student_id}}" required>
                                <small class="text-danger">{{ $errors->first('student_id') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="GuardianName">Guardian's Name</label>
                                <input type="text" class="form-control" id="guardianName" name="guardian" value="{{$student->guardian}}" >
                                <small class="text-danger">{{ $errors->first('guardian') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="Occupation">Guardian's Occupation</label>
                                <input type="text" class="form-control" id="occupationName" name="occupation" value="{{$student->occupation}}" >
                                <small class="text-danger">{{ $errors->first('occupation') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="Vill">Guardian's Village Name</label>
                                <input type="text" class="form-control" id="guardianVillName" name="guardian_village" value="{{$student->guardian_village}}" >
                                <small class="text-danger">{{ $errors->first('guardian_village') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="Post">Guardian's Post Name</label>
                                <input type="text" class="form-control" id="guardianPostName" name="guardian_post" value="{{$student->guardian_post}}" >
                                <small class="text-danger">{{ $errors->first('guardian_post') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="Post">Guardian's Thana Name</label>
                                <input type="text" class="form-control" id="guardianThanaName" name="guardian_thana" value="{{$student->guardian_thana}}" >
                                <small class="text-danger">{{ $errors->first('guardian_thana') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="District">Guardian's District Name</label>
                                <input type="text" class="form-control" id="guardianDistrictName" name="guardian_district" value="{{$student->guardian_district}}" >
                                <small class="text-danger">{{ $errors->first('guardian_district') }}</small>
                            </div>
                            <div class="form-group">
			  <label for="present_address">Present Address</label>
			    <textarea class="form-control" name="present_address" rows="3" >{{$student->present_address}}</textarea>
			    <small class="text-danger">{{ $errors->first('present_address') }}</small>
			</div>


			<div class="form-group">
			  <label for="permanent_address">Permanent Address</label>
			    <textarea class="form-control" name="permanent_address" rows="3" > {{$student->permanent_address}}</textarea>
			    <small class="text-danger">{{ $errors->first('permanent_address') }}</small>
			</div>

                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="District">Date of Birth *</label>
                                <input type="date" class="form-control" name="date_of_birdth" value="{{$student->date_of_birdth}}" required>
                                <small class="text-danger">{{ $errors->first('date_of_birdth') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="fatherName">Father's name *</label>
                                <input type="text" class="form-control" id="fatherName" name="father" value="{{$student->father}}" required>
                                <small class="text-danger">{{ $errors->first('father') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="motherName">Mother's name *</label>
                                <input type="text" class="form-control" id="motherName" name="mother" value="{{$student->mother}}" required>
                                <small class="text-danger">{{ $errors->first('mother') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number *</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$student->phone_number}}" required>
                                <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}">
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="Vill">Village</label>
                                <input type="text" class="form-control" id="villName" name="village" value="{{$student->village}}" >
                                <small class="text-danger">{{ $errors->first('village') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="Post">Post</label>
                                <input type="text" class="form-control" id="postName" name="post" value="{{$student->post}}" >
                                <small class="text-danger">{{ $errors->first('post') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="Post">Thana</label>
                                <input type="text" class="form-control" id="thanaName" name="thana" value="{{$student->thana}}" >
                                <small class="text-danger">{{ $errors->first('thana') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="District">District</label>
                                <input type="text" class="form-control" id="districtName" name="district" value="{{$student->district}}" >
                                <small class="text-danger">{{ $errors->first('district') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="District">Nationality</label>
                                <input type="text" class="form-control" id="nationalityName" name="nationality" value="{{$student->nationality}}" >
                                <small class="text-danger">{{ $errors->first('nationality') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="religion">Religion </label>
                                <select class="form-control" id="religion" name="religion">
                                    <option value="">Select Religion</option>
                                    <option value="{{'Islam'}}" {{ $student->religion == 'Islam' ? 'selected' : ''}}>Islam</option>
                                    <option value="{{'Hinduism'}}" {{ $student->religion == 'Hinduism' ? 'selected' : ''}}>Hinduism</option>
                                    <option value="{{'Buddhism'}}"{{ $student->religion == 'Buddhism' ? 'selected' : ''}}>Buddhism</option>
                                    <option value="{{'Christianity'}}"{{ $student->religion == 'Christianity' ? 'selected' : ''}}>Christianity</option>
                                    <option value="{{'other'}}"{{ $student->religion == 'other' ? 'selected' : ''}}>Other</option>
                                </select>
                                <small class="text-danger">{{ $errors->first('religionName') }}</small>
                            </div>
                            <div class="form-group">
                                @if($student->image)
                                <label >Image</label>
                                <img style="height: 50px" width="50px" src="{{asset('public/images/students/'.$student->image)}}">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="ImageUpload">Image Upload</label>
                                <input type="file" name="image" id="ImageUpload">
                                <small class="text-danger">{{ $errors->first('image') }}</small>
                            </div>
                        </div>
                    </div> 
                    <button type="submit" class="btn btn-success mt-3 mb-3">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection




