@extends('admin.home')
@section('headTitle')
Admission List
@endsection

@section('content')
<section class="card mb-5"  >
    <div class="card-body tab-content ">
        <div id="access-log" class="tab-pane active">
            <table class="table table-striped table-no-more table-bordered mb-0">
                
                <tbody class="log-viewer">
                    <tr>
                        <td class="pt-3 pb-3">
                            <span class="va-middle">Name</span>
                        </td>
                        <td  class="pt-3 pb-3">
                            {{$admission_student->name}}
                        </td>
                    </tr>
                    <tr>
                        <td  class="pt-3 pb-3">
                            <span class="va-middle">Image</span>
                        </td>
                        <td  class="pt-3 pb-3">
                            <img src="{{asset('public/images/admission/'.$admission_student->image)}}" alt="{{$admission_student->name}}" />
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Date of Birth</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->date_time}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Gender</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->gender}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Student Group</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->student_group}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Class Name</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->classNameEnglish}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Father's Name</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->father_name}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Mother's Name</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->mother_name}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Contract Number</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->contuct_number}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Guardian's Occupation</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->occupation}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Present Adddress</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->present_address}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Permanent Adddress</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->permanent_address}}
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Type" class="pt-3 pb-3">
                            <span class="va-middle">Nationality</span>
                        </td>
                        <td data-title="Date" class="pt-3 pb-3">
                            {{$admission_student->nationality}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
