@extends('admin.home')
@section('headTitle')
Add Mark
@endsection
@section('content')
{{Form::open(['route'=>'marks.create','method'=>'post'])}}
<div class="card">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <!--        <div class="form-group col-2">
                    <input type="number" name="fullMark" class="form-control" placeholder="input full Mark">
                </div>-->
        <div class="row">
            <div class="form-group col-12 col-sm-3 col-md-3 col-lg-3">
                <select class="form-control subject_code" name="subject_code" required>
                    <option value=""> Subject Name</option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->subject_code}}">{{$subject->subject_english}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-12 col-sm-3 col-md-3 col-lg-3">
                <select class="form-control" name="semisterId" required>
                    <option value="">Choose Semester</option>
                    @foreach($exams as $exam)
                    <option value="{{$exam->id}}">{{$exam->examName}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-12  col-sm-3 col-md-3 col-lg-3">
                <select class="form-control" name="examYear" required>
                    <option value="">Choose Year</option>
                    @for($i=date('Y'); $i >= 2017; --$i)
                    <option 
                        {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                        value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-check text-center">
                <input type="checkbox" name="not_effect" value="1" class="form-check-input" id="not_effect">
                <label class="form-check-label" for="not_effect">Not Effect</label>
              </div>
            <div class="form-group col-8 col-sm-2 ">
                <button class="btn btn-success " type="submit" >Submit</button>
            </div>

        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="table-responsive">
                    <table id="" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>CA</th>
                                <th>CR</th>
                                <th>MCQ</th>
                                <th>PR</th>
                                <th>AP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->student_id}}</td>
                                <td>{{$student->name}} </td>

                                <td >
                                    <input type="number" name="ca[]" class="form-controll ca"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                    <input type="hidden" name="studentRoll[]" value="{{$student->student_id}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;">
                                    <input type="hidden" name="classNameId[]" value="{{$student->id}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" >
                                </td>

                                <td><input type="number" name="cr[]" class="form-controll cr"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="mcq[]" class="form-controll mcq"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td><input type="number" name="pr[]" class="form-controll pr"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100"></td>
                                <td ><input type="checkbox" name="ap[]" class="form-check-input ml-0 mt-0 ap" ></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="marks_class_name" class="form-control marks_class_name" value="{{ app('request')->input('classNameId') }}" >
{{Form::close()}}


@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $(".ca, .cr, .mcq, .pr").prop('disabled', true);
        $('.subject_code').change(function () {
            $(".ca, .cr, .mcq, .pr").prop('disabled', true);
            var subject_code = $(this).find(":selected").val();
            var marks_class_name = $('.marks_class_name').val();
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
                    }

                    if (result.cr) {
                        $(".cr").prop('disabled', false);
                        $(".cr").prop('max', result.cr);
                    }

                    if (result.mcq) {
                        $(".mcq").prop('disabled', false);
                        $(".mcq").prop('max', result.mcq);
                    }
                    if (result.pr) {
                        $(".pr").prop('disabled', false);
                        $(".pr").prop('max', result.pr);
                    }
                },
            });
        })
    });
</script>
@stop
