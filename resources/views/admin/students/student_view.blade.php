@extends('admin.home')
@section('headTitle')
Student List
@endsection
@section('content')
{{dd($student_info)}}
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>Name</td>
      <td>{{$student_info->studentName}}</td>
    </tr>
  </tbody>
</table>
@endsection
