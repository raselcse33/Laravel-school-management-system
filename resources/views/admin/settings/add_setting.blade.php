@extends('admin.home')
@section('headTitle')
Basic Settings
@endsection
 @section('content')
    {{ Form::open(['route'=>'setting.add','method'=>'post','enctype'=>'multipart/form-data','id'=>'settingformId','files'=>true])}}

  @if($setting==null) 
   <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5> Add New Settings </h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
            <div class="row">
            <div class="col-sm-6">
                 <div class="form-group">
                      {{Form::label('text','Institute Name English',['class'=>'col-form-label'])}}
                      <input type="text" name="name"  class="form-control" placeholder="School Name English" required>
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">

                      {{Form::label('text','Institute Name Bangla',['class'=>'col-form-label'])}}
                      <input type="text" name="name_bangla"  class="form-control" placeholder="School Name Bangla" required>
                      @if ($errors->has('name_bangla'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name_bangla') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                      {{Form::label('text','Slogan ',['class'=>'col-form-label'])}}
                      {{Form::text('slogan',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Slogan' ])}}
                      @if ($errors->has('slogan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slogan') }}</strong>
                          </span>
                      @endif
                  </div>
                 
            </div>
            <div class="col-sm-6">
                  <div class="form-group">
                    {{Form::label('text','E-mail ',['class'=>'col-form-label'])}}
                    {{Form::email('email',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'E-mail Address','required' => 'required'])}}
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                      {{Form::label('text','Institute Code',['class'=>'col-form-label'])}}
                      <input type="text" name="institute_code"  class="form-control" placeholder="Institute Code">
                      
                      @if ($errors->has('institute_code'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('institute_code') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
                    {{Form::label('text','MPO Code',['class'=>'col-form-label'])}}
                    {{Form::text('mpo_code',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'MPO Code'])}}
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mpo_code') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::label('text','EIIN',['class'=>'col-form-label'])}}
                    {{Form::number('eiin',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'EIIN'])}}
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('eiin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                  {{Form::label('text','Address',['class'=>'col-form-label',])}}
                  {{ Form::textarea('Address',null, ['class'=>'form-control','name'=>'address','rows'=>'2']) }}
                    @if ($errors->has('address'))
                      <span class="text-danger">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                      {{Form::label('text','Phone Number',['class'=>'col-form-label'])}}
                      {{Form::text('phone_number',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Phone Number','required' => 'required'])}}
                      @if ($errors->has('phone_number'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('phone_number') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Telephone Number',['class'=>'col-form-label'])}}
                    {{Form::text('telephone_number',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Telephone Number'])}}
                    @if ($errors->has('telephone_number'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('telephone_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','School Time',['class'=>'col-form-label'])}}
                    {{Form::text('school_time',null,['class'=>'form-control','id'=>'defaultconfig','required' => 'required','placeholder'=>'School Time'])}}
                    @if ($errors->has('school_time'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('school_time') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text',' 
                    Eastablished',['class'=>'col-form-label'])}}
                    {{Form::number('eastablished',null,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Stablished'])}}
                    @if ($errors->has('eastablished'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('eastablished') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Choose Classes',['class'=>'col-form-label'])}}
                    <div class="input-group mb-3"> 
                      @foreach($classNames as $className)
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="class_name_id[]" value="{{$className->id}}" 
                            id="bdfirstClass" class="mr-2">{{$className->classNameEnglish}} 
                        </div>
                      </div> 
                      @endforeach
                      @if ($errors->has('class_name_id'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('class_name_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
                    {{Form::label('text',' Description',['class'=>'col-form-label',])}}
                    {{ Form::textarea('Description',null, ['class'=>'form-control ckeditor','name'=>'description']) }}
                    @if ($errors->has('description'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Widget One',['class'=>'col-form-label',])}}
                    {{ Form::textarea('widgetone',null, ['class'=>'form-control ckeditor ','name'=>'widgetone']) }}
                    @if ($errors->has('widgetone'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('widgetone') }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Widget Two',['class'=>'col-form-label',])}}
                    {{ Form::textarea('widgettwo',null, ['class'=>'ckeditor form-control','name'=>'widgettwo']) }}
                    @if ($errors->has('widgettwo'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('widgettwo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Meta Keyword',['class'=>'col-form-label',])}}
                    {{ Form::textarea('metakeyword',null, ['class'=>'ckeditor form-control','name'=>'metakeyword']) }}
                    @if ($errors->has('metakeyword'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('metakeyword') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Meta Description',['class'=>'col-form-label',])}}
                    {{ Form::textarea('metadescription',null, ['class'=>'ckeditor form-control','name'=>'metadescription']) }}
                    @if ($errors->has('metadescription'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('metadescription') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Logo',['class'=>'col-form-label'])}}
                    {{Form::file('logo',null,['class'=>'form-control','id'=>'defaultconfig'])}}
              </div>
                @if ($errors->has('logo'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Banner',['class'=>'col-form-label'])}}
                    {{Form::file('banner',null,['class'=>'form-control','id'=>'defaultconfig'])}}
              </div>
                @if ($errors->has('banner'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('banner') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Flag',['class'=>'col-form-label'])}}
                    {{Form::file('flag',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    
              </div>
                @if ($errors->has('flag'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('flag') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Icon',['class'=>'col-form-label'])}}
                    {{Form::file('icon',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    
              </div>
                @if ($errors->has('icon'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('icon') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Institute Signature',['class'=>'col-form-label'])}}
                    {{Form::file('signature',null,['class'=>'form-control','id'=>'defaultconfig'])}}
              </div>
                @if ($errors->has('signature'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('signature') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Author URL',['class'=>'col-form-label',])}}
                    {{ Form::text('authorurl',null, ['class'=>'form-control','name'=>'authorurl']) }}
                    @if ($errors->has('authorurl'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('authorurl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Map URL',['class'=>'col-form-label',])}}
                    {{ Form::text('mapurl',null, ['class'=>'form-control','name'=>'mapurl']) }}
                    @if ($errors->has('mapurl'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mapurl') }}</strong>
                        </span>
                    @endif
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
               <h5> Update Settings </h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
          <div class="row">
            <div class="col-sm-6">
                 <div class="form-group">

                      {{Form::label('text','Institute Name English',['class'=>'col-form-label'])}}
                      <input type="text" name="name" value="{{$setting->name}}" class="form-control" placeholder="School Name English" required>
                      <input type="hidden" name="settingId" value="{{$setting->id}}" class="form-control">
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">

                      {{Form::label('text','Institute Name Bangla',['class'=>'col-form-label'])}}
                      <input type="text" name="name_bangla" value=" {{$setting->name_bangla}}" class="form-control" placeholder="School Name Bangla" required>
                      @if ($errors->has('name_bangla'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name_bangla') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                      {{Form::label('text','Slogan ',['class'=>'col-form-label'])}}
                      {{Form::text('slogan',$setting->slogan,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Slogan'])}}
                      @if ($errors->has('slogan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slogan') }}</strong>
                          </span>
                      @endif
                  </div>
                 
            </div>
            <div class="col-sm-6">
                  <div class="form-group">
                    {{Form::label('text','E-mail ',['class'=>'col-form-label'])}}
                    {{Form::email('email',$setting->email,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'E-mail Address'])}}
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                      {{Form::label('text','Institute Code',['class'=>'col-form-label'])}}
                      <input type="text" name="institute_code" value="{{$setting->institute_code}}" class="form-control" placeholder="Institute Code">
                      
                      @if ($errors->has('institute_code'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('institute_code') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
                    {{Form::label('text','MPO Code',['class'=>'col-form-label'])}}
                    {{Form::text('mpo_code',$setting->mpo_code,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'MPO Code'])}}
                    @if ($errors->has('mpo_code'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mpo_code') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::label('text','EIIN',['class'=>'col-form-label'])}}
                    {{Form::number('eiin',$setting->eiin,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'EIIN'])}}
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('eiin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                  {{Form::label('text','Address',['class'=>'col-form-label',])}}
                  {{ Form::textarea('Address',$value=$setting->address, ['class'=>'form-control','name'=>'address','rows'=>'2']) }}
                    @if ($errors->has('address'))
                      <span class="text-danger">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                      {{Form::label('text','Phone Number',['class'=>'col-form-label'])}}
                      {{Form::text('phone_number',$setting->phone_number,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Phone Number'])}}
                      @if ($errors->has('phone_number'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('phone_number') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Telephone Number',['class'=>'col-form-label'])}}
                    {{Form::text('telephone_number',$setting->telephone_number,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Telephone Number'])}}
                    @if ($errors->has('telephone_number'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('telephone_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','School Time',['class'=>'col-form-label'])}}
                    {{Form::text('school_time',$setting->school_time,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'School Time'])}}
                    @if ($errors->has('school_time'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('school_time') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text',' 
                    Eastablished',['class'=>'col-form-label'])}}
                    {{Form::number('eastablished',$setting->eastablished,['class'=>'form-control','id'=>'defaultconfig','placeholder'=>'Stablished'])}}
                    @if ($errors->has('eastablished'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('eastablished') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Choose Classes',['class'=>'col-form-label'])}}
                    <div class="input-group mb-3"> 
                      @foreach($classNames as $className)
                      <div class="input-group-prepend mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="class_name_id[]" 
                            {{ (in_array($className->id, explode(',', $setting->class_name_id))) ? 'checked' : '' }}
                            value="{{$className->id}}" 
                            id="bdfirstClass" class="mr-2">{{$className->classNameEnglish}} 
                        </div>
                      </div> 
                      @endforeach
              
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
                    {{Form::label('text',' Description',['class'=>'col-form-label',])}}
                    {{ Form::textarea('Description',$value=$setting->description, ['class'=>'form-control ckeditor','name'=>'description']) }}
                    @if ($errors->has('description'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Widget One',['class'=>'col-form-label',])}}
                    {{ Form::textarea('widgetone',$value=$setting->widgetone, ['class'=>'form-control ckeditor ','name'=>'widgetone']) }}
                    @if ($errors->has('widgetone'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('widgetone') }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Widget Two',['class'=>'col-form-label',])}}
                    {{ Form::textarea('widgettwo',$value=$setting->widgettwo, ['class'=>'ckeditor form-control','name'=>'widgettwo']) }}
                    @if ($errors->has('widgettwo'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('widgettwo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Meta Keyword',['class'=>'col-form-label',])}}
                    {{ Form::textarea('metakeyword',$setting->metakeyword, ['class'=>'ckeditor form-control','name'=>'metakeyword']) }}
                    @if ($errors->has('metakeyword'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('metakeyword') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Meta Description',['class'=>'col-form-label',])}}
                    {{ Form::textarea('metadescription',$setting->metadescription, ['class'=>'ckeditor form-control','name'=>'metadescription']) }}
                    @if ($errors->has('metadescription'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('metadescription') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Logo',['class'=>'col-form-label'])}}
                    {{Form::file('logo',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    <img src="{{asset('public/images/settings/'.$setting->logo)}}" class="mt-3"alt="{{$setting->name}}" width="100" height="80">
              </div>
                @if ($errors->has('logo'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Banner',['class'=>'col-form-label'])}}
                    {{Form::file('banner',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    <img src="{{asset('public/images/settings/'.$setting->banner)}}" class="mt-3"alt="{{$setting->banner}}" width="100" height="80">
              </div>
                @if($setting->banner!=NULL)
                <a href="{{route('banner.delete',$setting->id)}}" class="text-danger">Delete Banner</a>
                @endif
                @if ($errors->has('banner'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('banner') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Flag',['class'=>'col-form-label'])}}
                    {{Form::file('flag',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    <img src="{{asset('public/images/settings/'.$setting->flag)}}" class="mt-3"alt="{{$setting->flag}}" width="100" height="80">
              </div>
                @if ($errors->has('flag'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('flag') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Icon',['class'=>'col-form-label'])}}
                    {{Form::file('icon',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    <img src="{{asset('public/images/settings/'.$setting->icon)}}" class="mt-3"alt="{{$setting->icon}}" width="100" height="80">
              </div>
                @if ($errors->has('icon'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('icon') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Institute Signature',['class'=>'col-form-label'])}}
                    {{Form::file('signature',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    <img src="{{asset('public/images/settings/'.$setting->signature)}}" class="mt-3"alt="{{$setting->signature}}" width="100" height="80">
              </div>
                @if ($errors->has('signature'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('signature') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Author URL',['class'=>'col-form-label',])}}
                    {{ Form::text('authorurl',$setting->authorurl, ['class'=>'form-control','name'=>'authorurl']) }}
                    @if ($errors->has('authorurl'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('authorurl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('text','Map URL',['class'=>'col-form-label',])}}
                    {{ Form::text('mapurl',$setting->mapurl, ['class'=>'form-control','name'=>'mapurl']) }}
                    @if ($errors->has('mapurl'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mapurl') }}</strong>
                        </span>
                    @endif
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