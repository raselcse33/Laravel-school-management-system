@extends('admin.home')
@section('headTitle')
View Staff's
@endsection
@section('content')
<table class="table table-hover">
  <thead>
  </thead>
  <tbody>
    <tr>
      <td colspan="2">Name</td>
      <td>{{$staff->name}}</td>
    </tr>
     <tr>
      <td colspan="2">Date Of Birth</td>
      <td>{{$staff->date}}</td>
    </tr>
     <tr>
      <td colspan="2">Father's Name</td>
      <td>{{$staff->father_name}}</td>
    </tr>
     <tr>
      <td colspan="2">Mother's Name</td>
      <td>{{$staff->mother_name}}</td>
    </tr>
     <tr>
      <td colspan="2">Present Address</td>
      <td>{{$staff->present_address}}</td>
    </tr>
     <tr>
      <td colspan="2">Permanent Address</td>
      <td>{{$staff->permanent_address}}</td>
    </tr>
     <tr>
      <td colspan="2">NID Number</td>
      <td>{{$staff->nid_number}}</td>
    </tr>
     <tr>
      <td colspan="2">Phone Number</td>
      <td>{{$staff->phone_number}}</td>
    </tr>
     <tr>
      <td colspan="2">Gender</td>
      <td>{{$staff->gender}}</td>
    </tr>
     <tr>
      <td colspan="2">Education</td>
      <td>{{$staff->education}}</td>
    </tr>
     <tr>
      <td colspan="2">Job Skill</td>
      <td>{{$staff->job_skill}}</td>
    </tr>
     <tr>
      <td colspan="2">Experience</td>
      <td>{{$staff->experience}}</td>
    </tr>
     <tr>
      <td colspan="2">Previous Institution</td>
      <td>{{$staff->previous_institution}}</td>
    </tr>
     <tr>
      <td colspan="2">Designation</td>
      <td>{{$staff->designation}}</td>
    </tr>
     <tr>
      <td colspan="2">Image</td>
      <td><img width="90px" height="90px" src="{{asset('public/images/staffs/image/'.$staff->image)}}"></td>
    </tr>
     <tr>
      <td colspan="2">CV</td>
      <td><a target="blank" style="color: green" href="{{asset('public/images/staffs/cv/'.$staff->cv)}}">CV</td>
    </tr>
    <tr>
      <td colspan="2">document</td>
      <td><a target="blank" style="color: green" href="{{asset('public/images/staffs/document/'.$staff->document)}}">Document</td>
    </tr>

  </tbody>
</table>




@endsection