@extends('admin.home')
@section('headTitle')
DB Settings
@endsection
 @section('content')
    {{ Form::open(['route'=>'db.setting.store','method'=>'post','id'=>'settingformId','files'=>true])}}
   <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5>Delete Table</h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
            <div class="row">
              <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="class" value="class_names" 
                            id="bdfirstClass" class="mr-2">Class
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="section" value="sections" 
                            id="bdfirstClass" class="mr-2 ">Section 
                        </div>
                      </div> 
                       <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="group" value="groups" 
                            id="bdfirstClass" class="mr-2 ">Group 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="subject" value="subjects" 
                            id="bdfirstClass" class="mr-2">Subject 
                        </div>
                      </div> 
                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="exam" value="exams" 
                            id="bdfirstClass" class="mr-2">Exam 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="sliders" value="sliders" 
                            id="bdfirstClass" class="mr-2">Sliders 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="gallery" value="galleries" 
                            id="bdfirstClass" class="mr-2">Gallery 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="staff" value="staff" 
                            id="bdfirstClass" class="mr-2">Staff 
                        </div>
                      </div> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="students" value="students" 
                            id="bdfirstClass" class="mr-2">Students 
                        </div>
                      </div> 
                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="teachers" value="teachers" 
                            id="bdfirstClass" class="mr-2">Teachers 
                        </div>
                      </div>
                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="managing_committee" value="managing_committees" 
                            id="bdfirstClass" class="mr-2">Managing Committee 
                        </div>
                      </div>
                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="success_students" value="successful_students" 
                            id="bdfirstClass" class="mr-2">Success Students 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{-- {{Form::submit('Submit',['class'=>'btn btn-success mt-4 mr-2'])}} --}}
                    <input class="btn btn-success mt-4 mr-2" type="submit" name="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" value="submit">
                </div>
            </div>
            <div class="col-sm-6">

            </div>
            </div>
        </div>
      </div>
    </div>
   </div>
   {{Form::close()}}

@endsection