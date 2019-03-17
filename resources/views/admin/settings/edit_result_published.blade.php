@extends('admin.home')
@section('headTitle')
Edit Result Published
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
                    <h3>Edit Result Published</h3>
                    <form action="{{route('result_published.update',['id'=>$result_published->id])}}" method="post" class="form-row">
                        {{csrf_field()}}
                        
                        <div class="form-group col-sm-12">
                            <label>Class Name</label>
                            <br>
                             @foreach($classNames as $className)
                           <div class=" form-check form-check-inline">
                            <input class="form-check-input" name="classNameId[]"
                            {{ (in_array($className->id, explode(',', $result_published->classNameId))) ? 'checked' : '' }}
                             type="checkbox" value="{{$className->id}}" style="line-height:42px;">
                            <label class="form-radio-label mt-2 ">{{$className->classNameEnglish}}</label>
                          </div>
                          @endforeach
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
                                 {{ $result_published->semisterId  == $exam->id ? 'selected="selected"' : '' }}>
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
                                 {{ $result_published->examYear == $i ? 'selected="selected"' : '' }}>
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
                        <div class="form-group col-sm-12">
                            <label>Published Date</label>
                             <input type="date" name="date" class="form-control" value="{{$result_published->date}}" placeholder="Percentage" required >
                            @if ($errors->has('percentage'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('date') }}</strong>
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

