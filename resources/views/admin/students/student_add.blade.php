@extends('admin.home')
@section('headTitle')
Student  
@endsection
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-2">Add New Student</h5>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
                <form action="{{route('insert.student')}}" method="post"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="StudentName">Student's Name *</label>
                                <input type="text" class="form-control" id="studentName" value="{{old('name')}}"  name="name" placeholder="Enter Name" required>
                                <span class="text-danger"><strong> {{ $errors->first('name') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Class Name *</label>
                                <select class="form-control classNameChange" name="class_id" required>
                                    <option value="">Select Class </option>
                                    @foreach($className as $c)
                                    <option value="{{$c->id}}">{{$c->classNameEnglish}}</option>
                                    @endforeach()
                                    <span class="text-danger"><strong>{{ $errors->first('classNameEnglish') }}</strong></span>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="StudentName">Roll *</label>
                                <input type="text" class="form-control" id="roll" value="{{old('roll')}}" name="roll" placeholder="Enter roll number" required>
                                @if ($errors->has('roll'))
                                <span class="text-danger"><strong>
                                        {{ $errors->first('roll') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="StudentName">Student's Id *</label>
                                <input type="text" class="form-control" id="student_id" value="{{old('student_id')}}" name="student_id" placeholder="Enter Student Id number" required>
                                <span class="text-danger"><strong>{{ $errors->first('student_id') }}</strong></span>
                            </div>
                            <div  class="form-group section-group">
                                <label>Section *</label>
                                <select class="form-control" name="section_id" required="1">
                                    <option value="">Select Section </option>
                                    @foreach($section as $sections)
                                    <option value="{{$sections->id}}">{{$sections->section}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group choose-group">
                                <label>Group</label>
                                <select class="form-control" name="student_group" required>
                                    <!--<option value="">Select Group Name</option>-->
                                    @foreach($group as $groups)
                                    <option value="{{$groups->groupName}}">{{$groups->groupName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row comp-subject">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <p>Compulsory Subjects</p>
                                            </div>
                                            @foreach ($subjects as $subject)
                                            <div class=" form-check form-check-inline">
                                                <input class="form-check-input" name="compulsory_subjects[]" type="checkbox" value="{{$subject->subject_code}}" style="line-height:42px;">
                                                <label style="text-transform: capitalize;" class="form-radio-label mt-2 ">{{$subject->subject_english}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <p>Fourth Subject</p>
                                            </div>
                                            @foreach ($subjects as $subject)
                                            <div class=" form-radio form-radio-inline">
                                                <input class="form-radio-input" name="fourth_subject" type="radio" value="{{$subject->subject_code}}">
                                                <label style="text-transform: capitalize;" class="form-radio-label mr-2">{{$subject->subject_english}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="E-mail">
                                <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label for="Vill">Village</label>
                                                            <input type="text" class="form-control" id="villName" name="village" placeholder="Enter Village Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('villageName') }}</strong></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Post">Post</label>
                                                            <input type="text" class="form-control" id="postName" name="post" placeholder="Enter Post Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('post') }}</strong></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Post">Thana</label>
                                                            <input type="text" class="form-control" id="Post" name="thana" placeholder="Enter Thana Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('thana') }}</strong></span>
                                                        </div>-->
                            <div class="form-group">
                                <label for="present_address">Present Address</label>
                                <textarea class="form-control" name="present_address" rows="3" ></textarea>
                                <small class="text-danger">{{ $errors->first('present_address') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" value="{{old('nationality')}}" name="nationality" placeholder="Enter Nationality" >
                                <span class="text-danger"><strong>{{ $errors->first('nationality') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Study Year *</label>
                                <select class="form-control" name="study_year" required>
                                    <option value="">Choose Year</option>
                                    @for($i=date('Y'); $i >= 2017; --$i)
                                    <option 
                                        {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                                        value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger"><strong>{{ $errors->first('religionName') }}</strong></span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="date_of_birdth">Date of Birth *</label>
                                <input type="date" class="form-control"id="date_of_birdth" name="date_of_birdth" value="{{old('date_of_birdth')}}" required>
                                <span class="text-danger"><strong>{{ $errors->first('date_of_birdth') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="father">Father's name *</label>
                                <input type="text" class="form-control" id="father" name="father" value="{{old('father')}}" required="" placeholder="Enter Father Name" >
                                <span class="text-danger"><strong>{{ $errors->first('father') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="mother">Mother's name *</label>
                                <input type="text" class="form-control" id="mother" name="mother" value="{{old('mother')}}" required="" placeholder="Enter Mother Name" >
                                <span class="text-danger"><strong>{{ $errors->first('mother') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number *</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number')}}" placeholder="Phone Number" >
                                <span class="text-danger"><strong>{{ $errors->first('phone_number') }}</strong></span>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label for="District">District</label>
                                                            <input type="text" class="form-control" id="districtName" name="districtName" placeholder="Enter District Name" required>
                                                            <span class="text-danger"><strong>{{ $errors->first('districtName') }}</strong></span>
                                                        </div>-->
                            <div class="form-group">
                                <label for="GuardianName">Guardian's Name</label>
                                <input type="text" class="form-control" id="guardianName" name="guardian" value="{{old('guardian')}}" placeholder="Enter Guardian Name" >
                                <span class="text-danger"><strong>{{ $errors->first('guardian') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="Occupation">Guardian's Occupation</label>
                                <input type="text" class="form-control" id="Occupation" value="{{old('occupation')}}" name="occupation" placeholder="Enter Occupation " >
                                <span class="text-danger"><strong>{{ $errors->first('occupation') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="permanent_address">Permanent Address</label>
                                <textarea class="form-control" name="permanent_address" rows="3" ></textarea>
                                <small class="text-danger">{{ $errors->first('permanent_address') }}</small>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label for="guardian_village">Guardian's Village Name</label>
                                                            <input type="text" class="form-control" id="guardian_village" name="guardian_village" placeholder="Enter Village Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('guardian_village') }}</strong></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guardian_post">Guardian's Post Name</label>
                                                            <input type="text" class="form-control" id="guardian_post" name="guardian_post" placeholder="Enter Post Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('guardian_post') }}</strong></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guardian_thana">Guardian's Thana Name</label>
                                                            <input type="text" class="form-control" id="guardian_thana" name="guardian_thana" placeholder="Enter Thana Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('guardian_thana') }}</strong></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="District">Guardian's District Name</label>
                                                            <input type="text" class="form-control" id="District" name="guardian_district" placeholder="Enter District Name" >
                                                            <span class="text-danger"><strong>{{ $errors->first('guardian_district') }}</strong></span>
                                                        </div>-->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Religion *</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="religion" required="1">
                                    <option value="{{'Islam'}}">Islam</option>
                                    <option value="{{'Hinduism'}}">Hinduism</option>
                                    <option value="{{'Buddhism'}}">Buddhism</option>
                                    <option value="{{'Christianity'}}">Christianity</option>
                                    <option value="{{'other'}}">Other</option>
                                </select>
                                <span class="text-danger"><strong>{{ $errors->first('religionName') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Religious Subject*</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="religion_subject" required="1">
                                    <option value="">Choose Subject</option>
                                    @foreach($religion_subjects as $religion_subject)
                                    <option value="{{$religion_subject->subject_code}}">{{$religion_subject->subject_english}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger"><strong>{{ $errors->first('religion_subject') }}</strong></span>
                            </div>
                            <div class="form-group">
                                <label for="ImageUpload">Image Upload *</label>
                                <input type="file" name="image" id="ImageUpload" value="{{old('image')}}" required>
                                <span class="text-danger"><strong>{{ $errors->first('image') }}</strong></span>
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
@section('script')
<script>
    $(document).ready(function () {
        $('.comp-subject').hide();
        $('.choose-group').hide();
        $('.classNameChange').change(function () {
            var selected = $(this).find(":selected").val();
            if (selected > 8) {
                $('.comp-subject').show();
                $('.choose-group').show();
            } else {
                $('.comp-subject').hide();
                $('.choose-group').hide();
            }
        })
    });
</script>
@stop




