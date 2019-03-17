@extends('admin.home')
@section('headTitle')
Select Class Teachers
@endsection
@section('content')
<div class="container"
     <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <form action="{{route('class_teacher.store')}}" method="post">
                    	{{csrf_field()}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100px" scope="col">Id</th>
                                <th scope="col">Index Number</th>
                                <th scope="col">Name</th>
                               
                                <th scope="col">Class Name</th>
                                <th scope="col">Cheek</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($teachers as $teacher)
                            <tr>
                                <td>
                                	<input type="text" name="teacher_table_id[]" value="{{$teacher->id}}" class="form-controll"style="width:30%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" readonly>
                                </td>
                                <td>
                                	<input type="text" name="indexNumber[]" value="{{$teacher->indexNumber}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" readonly>
                                </td>
                                <td>
                                	<input type="text" name="name[]" value="{{$teacher->name}}" class="form-controll"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100" readonly>
                                </td>
                                <td>
                                	<select class="form-control" name="classNameId[]" id="className">
                                     <option value="">Select Class Name</option>
                                      @foreach($classNames as $className)
                                      <option value="{{$className->id}}">{{$className->classNameEnglish}}</option>
                                      @endforeach
                                  </select>
                                </td>
                               
                                <td>
                                	<input type="checkbox" name="cheek[]" value="1" class="form-controll ca"style="width:80%; padding:4px;border:1px solid #ccc; font-size: 16px; border-radius: 2px;" min="0" max="100">
                                </td>
                                
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div style="margin-top: 10px;" class="mb-5"></div>
		            <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection