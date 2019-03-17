@extends('admin.home')
@section('headTitle')
Students Attendance
@endsection
@section('content')
{{Form::open(['route'=>'student_attendance.add','method'=>'post'])}}
<div class="card">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        
        <div class="row">
            <div class="form-group col-12 col-sm-3 col-md-3 col-lg-3">
               
               <input type="text" name="class_name[]" value=" {{$className->classNameEnglish}}" class="form-control" readonly>
               <input type="hidden" name="class_id[]" value=" {{$className->id}}" class="form-control" readonly>
            </div>
            <div class="form-group col-12 col-sm-3 col-md-3 col-lg-3">
                <input type="text" name="section[]" value=" {{$sectionName->section}}" class="form-control" readonly>
                 <input type="hidden" name="section_id[]" value=" {{$sectionName->id}}" class="form-control" readonly>
            </div>
            <div class="form-group col-12  col-sm-3 col-md-3 col-lg-3">
                <input type="date" name="date[]"  class="form-control">
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
                                <th>No</th>
                                <th>Index Number</th>
                                <th>Student Name</th>
                                <th>Roll</th>
                                <th>Attendence</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach($students as $student)
                            @php
                            $i++
                            @endphp
                            <tr>
                                <td>
                                    {{$i}}
                                </td>
                                <td>
                                {{$student->student_id}}
                                    
                                    <input type="hidden" name="student_id[]" value=" {{$student->student_id}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td >
                                    {{$student->name}}
                                      <input type="hidden" name="name[]" value="{{$student->name}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>

                                <td>
                                    {{$student->roll}}
                                    <input type="hidden" name="roll[]" value=" {{$student->roll}}" class="form-controll cr"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td >
                                <input type="radio" name="attendence[@php echo $student->roll@endphp]" value="P" class="ml-0 mt-0">P
                               
                                 <input type="radio" name="attendence[@php echo $student->roll@endphp]" value="A" class="ml-3 mt-0">A
                               </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{Form::close()}}
@endsection

