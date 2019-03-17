@extends('admin.home')
@section('headTitle')
Marks Setting
@endsection
@section('content')
          <div class="card mb-5">
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="" class="table table-borderless text-center">
                      <thead >
                           <tr>
                             <th>Subject ID</th>
                             <th>Full Marks</th>
                             <th>CA</th>
                             <th>CR</th>
                             <th>MCQ</th>
                             <th>PR</th>
                           </tr>
                      </thead> 
                      <tbody class="subject-mark ">
                        {{ Form::open(['route'=>'subject.marks.create','method'=>'post'])}}
                        {{csrf_field()}}
                        @foreach($subjectsCode as $code)
                        <tr>
                          <td>{{$code->subjectNameEnglish}}</td>
                          <td>
                              <input type="number" name="full_mark[]" required class="form-controll" style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" ><br>
                            @if ($errors->has('full_mark[]'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('full_mark[]') }}</strong>
                                </span>
                            @endif
                            <input type="hidden" name="subjectId[]" value="{{$code->id}}">
                            <input type="hidden" name="subject_code[]" value="{{$code->subject_code}}">
                            
                          </td>
                          <td><input type="number" name="ca[]" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                          </td>
                          <td><input type="number" name="cr[]" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                          <td><input type="number" name="mcq[]" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                          <td><input type="number" name="pr[]" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                         
                         
                        </tr>
                        @endforeach
                        <tr>
                          <td>
                           <input type="submit" class="btn btn-success" value="Submit">
                          </td>
                        </tr>

                         {{Form::close()}}
                      </tbody>
                     </table>
                  </div>
                </div>
             </div>
          </div>
        </div>
      </div> 
      <style type="text/css">
        .subject-mark td{
        width:18% !important;
      }
      </style>
      
           
@endsection
