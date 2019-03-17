@extends('admin.home')
@section('headTitle')
Marks Setting
@endsection
@section('content')
{{ Form::open(['route'=>'subject.marks.update','method'=>'post'])}}
<div class="card">
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        <div class="row mb-5">

            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <p>Class Name </p>
                        </div>
                        @foreach ($classNams as $classNam)
                        <div class=" form-check form-check-inline">
                            <input class="form-check-input" name="class_id[]" type="checkbox" {{(in_array($classNam->id,explode(',',$marks_edit->class_id)))?'checked':'' }}  value="{{$classNam->id}}" style="line-height:42px;">
                            <label class="form-radio-label mt-2 ">{{$classNam->classNameEnglish}}</label>
                        </div>
                        @endforeach
                        <br/>
                        @if ($errors->has('class_id'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('class_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-title">
                    <p>Subjects Name </p>
                </div>
                <div class="form-group ">
                    {{Form::open(['route'=>'students.mark.add','method'=>'post','class'=>'form-row'])}}
                    <select class="form-control" name="subjectId" id="className" required >
                        <option value="">Select Class Name</option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}" 
                                {{(in_array($subject->id,explode(',',$marks_edit->subjectId)))?'selected':'' }}>
                            {{$subject->subject_english}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('subjectId'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('subjectId')}}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="" class="table table-borderless text-center">
                        <thead >
                            <tr>
                                <th>Full Marks</th>
                                <th>CA</th>
                                <th>CR</th>
                                <th>MCQ</th>
                                <th>PR</th>
                            </tr>
                        </thead> 
                        <tbody class="subject-mark ">
                            <tr>
                                <td>
                                    <input type="number" name="full_mark" value="{{$marks_edit->full_mark}}" required class="form-controll" style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" ><br>
                                    <input type="hidden" name="markId" value="{{$marks_edit->id}}" required class="form-controll" style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" ><br>
                                    @if ($errors->has('full_mark'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('full_mark') }}</strong>
                                    </span>
                                    @endif

                                </td>
                                <td><input type="number" name="ca" value="{{$marks_edit->ca}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td><input type="number" name="cr" value="{{$marks_edit->cr}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="mcq" value="{{$marks_edit->mcq}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="pr" value="{{$marks_edit->pr}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{Form::close()}}
<style type="text/css">
    .subject-mark td{
        width:18% !important;
    }
</style>
@endsection


