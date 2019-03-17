@extends('admin.home')
@section('headTitle')
Edit Students Attendance
@endsection
@section('content')
{{Form::open(['method'=>'post'])}}
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
                            <tr>
                                <td>
                                </td>
                                <td>
                                 <input type="hidden" name="student_id[]" value="" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td>
                                <input type="hidden" name="name[]" value="" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td>
                                <input type="hidden" name="roll[]" value="" class="form-controll cr"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                <td>
                               </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <div class="mt-3 ">
            <button class="btn btn-success " type="submit" >Submit</button>
    </div>
</div>

{{Form::close()}}
@endsection

