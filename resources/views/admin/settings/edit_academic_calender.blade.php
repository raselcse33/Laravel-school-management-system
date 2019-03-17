@extends('admin.home')
@section('headTitle')
Edit Academic Calender
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif

                    <h3>Edit Academic Calender</h3>
                    <form action="{{route('academics.update',['id'=>$academics->id])}}" method="post" class="form-row" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" value="{{$academics->title}}" >
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Date</label>
                            <input type="date" class="form-control"   name="calender_date" value="{{$academics->calender_date}}" >
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Image</label>
                            <input type="file" class="form-control mb-4" id="image"  name="image" >
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                             <a href="{{asset('public/images/academic_calender/'.$academics->image)}}" style="color:#0061F6;text-decoration: none;">View Routine</a>
                        </div>

                        <div class="form-group mt-4 col-sm-3">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
