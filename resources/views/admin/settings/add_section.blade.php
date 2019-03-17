@extends('admin.home')
@section('headTitle')
Section
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
                    <h3>Add New Section</h3>
                    <form action="{{route('section.store')}}" method="post" class="form-row">
                        {{csrf_field()}}
                        <div class="form-group col-12">
                            <label for="StudentName">Section</label>
                            <input type="text" class="form-control"  name="section" placeholder="Enter Section" required >
                            @if ($errors->has('section'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('section') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h3>All Sections</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Section Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sections as $section)
                                <tr>
                                    <td>{{ $section->id }}</td>
                                    <td>{{ $section->section }}</td>
                                    <td>
                                        <a href="{{route('section.edit',$section->id)}}" class="btn btn-success">Edit</a>
                                       <a href="{{route('section.delete',$section->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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
</div>
</section>
@endsection