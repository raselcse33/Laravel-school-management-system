@extends('admin.home')
@section('headTitle')
System Settings
@endsection
 @section('content')
    {{ Form::open(['route'=>'system.setting.store','method'=>'post','id'=>'settingformId','files'=>true])}}

  @if($system_setting==null) 
   <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5>Published and Unpublished</h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
            <div class="row">
              <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Menu Bar</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="online_application" value="1" 
                            id="bdfirstClass" class="mr-2">Online Application
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="routine" value="1" 
                            id="bdfirstClass" class="mr-2 ">Routine 
                        </div>
                      </div> 
                       <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="menu_attendance" value="1" 
                            id="bdfirstClass" class="mr-2 ">Attendance 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="result" value="1" 
                            id="bdfirstClass" class="mr-2">Result 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Home Page</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="counter" value="1" 
                            id="bdfirstClass" class="mr-2">Counter 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="attendance" value="1" 
                            id="bdfirstClass" class="mr-2 ">Attendance 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="teacher" value="1" 
                            id="bdfirstClass" class="mr-2">Teachers 
                        </div>
                      </div> 

                       <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="student" value="1" 
                            id="bdfirstClass" class="mr-2">Students 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>

             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Sidebar</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="map" value="1" 
                            id="bdfirstClass" class="mr-2">Map 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Mark Setting</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="ca" value="1" 
                            id="bdfirstClass" class="mr-2">With CA 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::submit('Submit',['class'=>'btn btn-success mt-4 mr-2'])}}
                </div>
            </div>
            <div class="col-sm-6">

            </div>
            </div>
        </div>
      </div>
    </div>
   </div>
  
 @else 
  <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5>Published and Unpublished</h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
          <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Menu Bar</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="online_application" value="1"
                            @if($system_setting->online_application==1) checked=checked
                            @endif 
                            id="bdfirstClass" class="mr-2">Online Application
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="routine"value="1" 
                            @if($system_setting->routine==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2 ">Routine 
                        </div>
                      </div> 
                       <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="menu_attendance" value="1" 
                            @if($system_setting->menu_attendance==1) checked=checked 
                            @endif
                            id="bdfirstClass" class="mr-2 ">Attendance 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="result" value="1" 
                            @if($system_setting->result==1) checked=checked
                             @endif
                            id="bdfirstClass" class="mr-2">Result 
                           
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Home Page</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="counter" value="1" 
                             @if($system_setting->result==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2">Counter 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="attendance" value="1" 
                             @if($system_setting->attendance==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2 ">Attendance 
                        </div>
                      </div> 

                      <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="teacher" value="1" 
                             @if($system_setting->teacher==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2">Teachers 
                        </div>
                      </div> 

                       <div class="input-group-prepend mb-2 ml-3">
                        <div class="input-group-text">
                            <input type="checkbox" name="student" value="1" 
                             @if($system_setting->student==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2">Students 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>

             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Sidebar</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="map" value="1" 
                             @if($system_setting->map==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2">Map 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
             <div class="col-md-12">
                 <div class="form-group">
                    {{-- {{Form::label('text','Select The Option',['class'=>'col-form-label'])}} --}}
                    <h3>Mark Setting</h3>
                    <div class="input-group mb-3"> 
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="ca" value="1" 
                             @if($system_setting->ca==1) checked=checked
                            @endif
                            id="bdfirstClass" class="mr-2">With CA 
                        </div>
                      </div> 
                  </div>
                </div>
             </div>
           
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::submit('Submit',['class'=>'btn btn-success mt-4 mr-2'])}}
                </div>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endif 
 
 {{Form::close()}}
                


        
@endsection