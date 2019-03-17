@extends('admin.home')
@section('headTitle')
Update Section
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    
                    <h3>Update Section</h3>
                    <form action="{{route('section.update')}}" method="post" class="form-row">
                        {{csrf_field()}}
                        <div class="form-group col-8">
                            <label for="StudentName">Section</label>
                            <input type="text" class="form-control"  name="section" value="{{$editSection->section}}">
                            <input type="hidden" class="form-control"  name="sectionId" value="{{$editSection->id}}">
                            <small class="text-danger">{{ $errors->first('section') }}</small>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
