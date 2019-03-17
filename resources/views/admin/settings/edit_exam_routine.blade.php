@extends('admin.home')
@section('headTitle')
Edit Exam Routine
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

                    <h3>Edit Exam Routine</h3>
                    <form action="{{route('exam_routine.update')}}" method="post" class="form-row" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title"  name="title" value="{{$edit_exam_routine->title}}" >
                            <input type="hidden" class="form-control"  name="exam_routine_id" value="{{$edit_exam_routine->id}}" >
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="image">Image</label>
                            <input type="file" class="form-control mb-4" id="image"  name="image" >
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                             <a href="{{asset('public/images/exam_routine/'.$edit_exam_routine->image)}}" style="color:#0061F6;text-decoration: none;">View Routine</a>
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
