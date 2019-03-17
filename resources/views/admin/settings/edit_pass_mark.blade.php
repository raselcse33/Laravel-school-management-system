@extends('admin.home')
@section('headTitle')
Edit PassMark
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <h3>Edit PassMark</h3>
                    <form action="{{route('pass_mark.update',['id'=>$pass_mark->id])}}" method="post" class="form-row">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label>Percentage</label>
                             <input type="number" name="percentage" class="form-control" value="{{$pass_mark->percentage}}" placeholder="Percentage" required >
                            @if ($errors->has('percentage'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('percentage') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Class Name</label>
                            <select class="form-control" name="classNameId" id="className" required>
                                <option value="">Select Class Name</option>
                                @foreach($classNames as $className)
                                <option value="{{$className->id}}"
                                  {{ $pass_mark->classNameId  == $className->id ? 'selected="selected"' : '' }}>
                                    {{$className->classNameEnglish}}
                                </option>
                                @endforeach
                            </select>
                            @if($errors->has('classNameId'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameId') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Semester Name</label>
                            <select class="form-control" name="semisterId" required>
                              <option value="">Choose Semester</option>
                              @foreach($exams as $exam)
                              <option value="{{$exam->id}}"
                                 {{ $pass_mark->semisterId  == $exam->id ? 'selected="selected"' : '' }}>
                                 {{$exam->examName}}
                              </option>
                              @endforeach
                           </select>
                        @if($errors->has('semisterId'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('semisterId') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Exam Year</label>
                            <select class="form-control" name="examYear" required>
                               <option value="">Choose Year</option>
                               @for($i=date('Y'); $i >= 2017; --$i)
                              <option 
                                {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                                value="{{ $i }}"
                                 {{ $pass_mark->examYear == $i ? 'selected="selected"' : '' }}>
                             {{ $i }}
                            </option>
                               @endfor
                          </select>
                         @if($errors->has('examYear'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('examYear') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group mt-4 col-sm-3">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

