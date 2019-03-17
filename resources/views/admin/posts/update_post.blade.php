@extends('admin.home')
@section('headTitle')
Post
@endsection
@section('content')
    <div class="container">
        <div class="row">
          <div class="card m-auto">
            <div class="card-body">
                <p class="text-center text-success">{{Session::get('success')}}</p>
            <form action="{{route('update.post',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                  <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}" required>
                     <span class="text-danger">
                        <strong> {{ $errors->first('title') }}</strong>
                    </span>
                  </div>
                  <div class="form-group">
                  <label for="Slug">Summary</label>
                  <textarea class="ckeditor"  name="summary" >{{$post->summary}}</textarea>
                  <span class="text-danger">
                        <strong> {{ $errors->first('summary') }}</strong>
                    </span>
                </div>
                  <div class="form-group">
                    <label for="Title">Content</label>
                    <textarea class="ckeditor"name="content"  required>{{$post->content}}</textarea>
                    <span class="text-danger">
                        <strong> {{ $errors->first('content') }}</strong>
                    </span>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label>Choose Type</label>
                    </div>
                    <div class="col-lg-8">
                      <div class="input-group mb-3"> 
                        
                        <div class="input-group-prepend mb-2">
                          <div class="input-group-text">
                           <input type="checkbox" name="type[]" value="news" {{ (in_array("news", explode(',', $post->type))) ? 'checked' : '' }}  class="mr-2"   >News 
                          </div>
                          
                        </div>  
                        <div class="input-group-prepend mb-2">
                           <div class="input-group-text">
                            <input type="checkbox" name="type[]" value="notice"{{ (in_array("notice", explode(',', $post->type))) ? 'checked' : '' }}  class="mr-2"> Notice 
                          </div>
                        </div>
                        <div class="input-group-prepend mb-2">
                           <div class="input-group-text">
                            <input type="checkbox" name="type[]" value="event"{{ (in_array("event", explode(',', $post->type))) ? 'checked' : '' }}  class="mr-2" >Events 
                          </div>
                        </div>
                        <div class="input-group-prepend mb-2">
                           <div class="input-group-text">
                            <input type="checkbox" name="type[]" value="publication"{{ (in_array("publication", explode(',', $post->type))) ? 'checked' : '' }}  class="mr-2" >Publications 
                          </div>
                        </div>
                        <div class="input-group-prepend mb-2">
                           <div class="input-group-text">
                            <input type="checkbox" name="type[]" value="result"{{ (in_array("result", explode(',', $post->type))) ? 'checked' : '' }}  class="mr-2" >Result 
                          </div>
                        </div>
                        @if ($errors->has('type'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('type') }}</strong>
                          </span>
                          @endif
                      </div>
                    </div>
                 </div>

                  <div class="form-group">
                    <label for="teacherName">Published Date</label>
                    <input type="date" class="form-control" name="dateTime" value="{{$post->dateTime}}" required>
                    <span class="text-danger">
                       <strong>{{ $errors->first('dateTime') }}</strong>
                    </span>
                  </div>

                   <div class="form-group">
                  @if($post->image)
                  <label for="teacherName">Image</label>
                  <img style="height: 50px" width="50px" src="{{asset('public/images/posts/'.$post->image)}}">
                 @endif
                </div>

                  <div class="form-group">
                    <label for="ImageUpload">Image Upload</label>
                    <input type="file" name="image">
                </div>

                   <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
            </form>

         </div>
       </div>
    </div>
  </div>
  <script type="text/javascript">
    $(function () {
        $("input[name='chkPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
@endsection





