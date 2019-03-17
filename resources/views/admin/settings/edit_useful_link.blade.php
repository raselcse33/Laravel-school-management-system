@extends('admin.home')
@section('headTitle')
Edit Useful Links
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <form action="{{route('useful_link.update',['id'=>$useful_link->id])}}" method="post">
                        {{csrf_field()}}
                    <div class="form-group">
                        <h4>Edit Useful Links </h4>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="title" class="form-control" value="{{$useful_link->title}}" required>
                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Link</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="link" class="form-control" value="{{$useful_link->link}}" required>
                            @if ($errors->has('link'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            {{Form::submit('Submit',['class'=>'btn btn-success mr-2'])}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
 @endsection

