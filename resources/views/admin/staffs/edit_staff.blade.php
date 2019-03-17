@extends('admin.home')
@section('headTitle')
Edit Staff
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
             @if (Session::has('success'))
                <div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('success') }}</div>
                @endif
             {{--  {{ Form::open(['route'=>'staff.create','method'=>'post','enctype'=>'multipart/form-data'])}} --}}
             <form action="{{route('update.staff',['id'=>$staff->id])}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
             
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                    <label class="col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$staff->name}}" placeholder="Name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group ">
                    <label class="col-form-label">Date Of Birth</label>
                    <input type="date" name="date" class="form-control" value="{{$staff->date}}" required>
                    @if ($errors->has('date'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Father's Name</label>
                    <input type="text" name="father_name" value="{{$staff->father_name}}" class="form-control" placeholder="Father's Name" required>
                    @if ($errors->has('father_name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('father_name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Mother's Name</label>
                    <input type="text" name="mother_name" value="{{$staff->mother_name}}" class="form-control" placeholder="Mother's Name" required>
                    @if ($errors->has('mother_name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mother_name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                    <label class="col-form-label">Present Address</label>
                   <textarea rows="4" cols="50" name="present_address" class="form-control" placeholder="Present Address" required>
                    {{$staff->present_address}}
                   </textarea>
                    @if ($errors->has('present_address'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('present_address') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group ">
                    <label class="col-form-label">Permanent Address</label>
                     <textarea rows="4" cols="50" name="permanent_address" class="form-control" placeholder="Permanent Address" required>
                        {{$staff->permanent_address}}
                     </textarea>
                    @if ($errors->has('permanent_address'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('permanent_address') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">NID Number</label>
                  <input type="text" name="nid_number" value="{{$staff->nid_number}}" class="form-control" placeholder="NID Number" required>
                  @if ($errors->has('nid_number'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('nid_number') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-form-label">Phone Number</label>
                  <input type="text" name="phone_number" value="{{$staff->phone_number}}" class="form-control" placeholder="Phone Number" required>
                  @if ($errors->has('phone_number'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">Email</label>
                  <input type="email" name="email" value="{{$staff->email}}" class="form-control" placeholder="Email">
                  @if ($errors->has('email'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-form-label">Highest Educational Qualification</label>
                  <input type="text" name="education" value="{{$staff->education}}" class="form-control" placeholder="Highest Educational Qualification" required>
                  @if ($errors->has('education'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('education') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Gender</label>
                    <br>
                  <input type="radio" name="gender" <?php echo ($staff->gender=='male')?'checked':'' ?> value="male" required>
                  <label class="form-check-label" for="male">
                    Male
                  </label>

                  <input type="radio" name="gender"<?php echo ($staff->gender=='female')?'checked':'' ?> value="female">
                  <label class="form-check-label" for="female">
                    Female
                  </label>
                  
                    @if ($errors->has('gender'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Marital Status</label>
                    <br>
                  <input type="radio" name="marital_status"<?php echo ($staff->marital_status=='married')?'checked':'' ?> value="married" required>
                  <label class="form-check-label" for="male">
                    Married
                  </label>

                   <input type="radio" name="marital_status" <?php echo ($staff->marital_status=='single')?'checked':'' ?> value="single">
                  <label class="form-check-label" for="male">
                    Single
                  </label>
                  
                    @if ($errors->has('marital_status'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('marital_status') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
            </div>

              <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">Job Skill</label>
                  <input type="text" name="job_skill" value="{{$staff->job_skill}}" class="form-control" placeholder="Job Skill">
                  @if ($errors->has('job_skill'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('job_skill') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-form-label">Experience</label>
                  <input type="text" name="experience" value="{{$staff->experience}}"  class="form-control" placeholder="Experience">
                  @if ($errors->has('experience'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('experience') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">Previous Institution Name</label>
                  <input type="text" name="previous_institution" value="{{$staff->previous_institution}}" class="form-control" placeholder="Previous Institution Name">
                  @if ($errors->has('previous_institution'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('previous_institution') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-form-label">Designation</label>
                  <input type="text" name="designation" value="{{$staff->designation}}" class="form-control" placeholder="Designation" required>
                  @if ($errors->has('designation'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('designation') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">Image</label>
                  <input type="file" name="image" class="form-control">
                   <img class="mt-3" height="90px" width="90px" src="{{asset('public/images/staffs/image/'.$staff->image)}}">
                  @if ($errors->has('image'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-form-label">CV</label>
                  <input type="file" name="cv" class="form-control">
                  <a target="blank" style="color: green" href="{{asset('public/images/staffs/cv/'.$staff->cv)}}">Show CV</a>
                  @if ($errors->has('cv'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('cv') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group ">
                  <label class="col-form-label">Document jknhjkh</label>
                  <input type="file" name="document" class="form-control">
                   <a target="blank" style="color: green" href="{{asset('public/images/staffs/document/'.$staff->document)}}">Show Document</a>
                  @if ($errors->has('document'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('document') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
           
           
            <div class="row mt-3">
              <div class="form-group ml-3">
                {{Form::submit('Create Subject',['class'=>'btn btn-success  form-control'])}}
              </div>
            </div>
           {{-- {{Form::close()}} --}}
           </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection