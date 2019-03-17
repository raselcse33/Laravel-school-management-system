
@extends('admin.home')
@section('headTitle')
Edit Mark
@endsection
@section('content')
{{Form::open(['route'=>'student.mark.update','method'=>'post'])}}
<div class="row">   
    <div class="col-12 col-sm-12 col-md-12">
        <div class="card-title">
            <h5>Class : {{$className->classNameEnglish}} <span class="pull-right"> Subject : {{$subjectName->subject_english}}</span></h5>

        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-check">
                    <input type="checkbox" name="not_effect" {{$non_effect->not_effect== 1 ? 'checked' : ''}}  value="1" class="form-check-input" id="edit_not_effect" >
                    <label class="form-check-label" for="edit_not_effect">Subject Not Effected</label>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="card mb-5 mt-5">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="table-responsive">
                    <table id="" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>student ID</th>
                                <th>student Name</th>
                                <th>CA</th>
                                <th>CR</th>
                                <th>MCQ</th>
                                <th>PR</th>
                                <th>AB</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student_marks as $student_mark)
                            <tr>
                                <td>{{$student_mark->studentRoll}}</td>
                                <td>{{$student_mark->name}} </td>

                                <td>
                                    <input type="number" name="ca[]" value="{{$student_mark->ca}}" class="form-controll ca"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                    <input type="hidden" name="studentRoll[]" value="{{$student_mark->studentRoll}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;">
                                    <input type="hidden" name="id[]" value="{{$student_mark->id}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;">
                                    <input type="hidden" name="classNameId[]" value="{{$student_mark->classNameId}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" >
                                    <input type="hidden" name="subjectCode[]" value="{{$student_mark->subjectCode}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" >
                                    <input type="hidden" name="semisterId[]" value="{{$student_mark->semisterId}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" >
                                    <input type="hidden" name="examYear[]" value="{{$student_mark->examYear}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" >
                                </td>

                                <td><input type="number" name="cr[]" class="form-controll cr" value="{{$student_mark->cr}}" style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="mcq[]" value="{{$student_mark->mcq}}" class="form-controll mcq"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="pr[]" value="{{$student_mark->pr}}"  class="form-controll pr"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td ><input type="checkbox" name="ap[]" value="{{$student_mark->ap}}" class="form-check-input ml-0 mt-0 " ></td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <input type="submit" class="btn btn-success">
            </div>
        </div>
    </div>
</div>
{{Form::close()}}

@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function () {
    // $(".ca, .cr, .mcq, .pr").prop('disabled', true);
//        $('.subject_code').change(function () {
//            $(".ca, .cr, .mcq, .pr").prop('disabled', true);
//            var subject_code = $(this).find(":selected").val();
//            var marks_class_name = $('.marks_class_name').val();
//            $.ajax({
//                type: "POST",
//                url: "{{ route('subject.marks.check') }}",
//                data: {subject_code: subject_code, marks_class_name: marks_class_name},
//                dataType: "json",
//                success: function (result) {
//                    //alert(result.ca)
//                    if (result.ca) {
//                        $(".ca").prop('disabled', false);
//                        $(".ca").prop('max', result.ca);
//                    }
//
//                    if (result.cr) {
//                        $(".cr").prop('disabled', false);
//                        $(".cr").prop('max', result.cr);
//                    }
//
//                    if (result.mcq) {
//                        $(".mcq").prop('disabled', false);
//                        $(".mcq").prop('max', result.mcq);
//                    }
//                    if (result.pr) {
//                        $(".pr").prop('disabled', false);
//                        $(".pr").prop('max', result.pr);
//                    }
//                },
//            });
//        })


    var subject_code = '{{ app('request')->input('subject_code') }}';
    var marks_class_name = '{{ app('request')->input('classNameId') }}';
    $.ajax({
    type: "POST",
            url: "{{ route('subject.marks.check') }}",
            data: {subject_code: subject_code, marks_class_name: marks_class_name},
            dataType: "json",
            success: function (result) {
            //alert(result.ca)
            if (result.ca) {
            $(".ca").prop('disabled', false);
            $(".ca").prop('max', result.ca);
            } else {
            $(".ca").prop('disabled', true);
            }

            if (result.cr) {
            $(".cr").prop('disabled', false);
            $(".cr").prop('max', result.cr);
            } else {
            $(".cr").prop('disabled', true);
            }

            if (result.mcq) {
            $(".mcq").prop('disabled', false);
            $(".mcq").prop('max', result.mcq);
            } else {
            $(".mcq").prop('disabled', true);
            }

            if (result.pr) {
            $(".pr").prop('disabled', false);
            $(".pr").prop('max', result.pr);
            } else {
            $(".pr").prop('disabled', true);
            }
            },
    });
    });
</script>
@stop