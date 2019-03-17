<div class="container message mt-3 p-0">
    <div class="row">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header message"><h3 class="text-center message">{{$page->title}}</h3>
            </div>
            <div class="card-body message p">
                <img src="{{asset('public/images/pages/'.$page->image)}}" class="mt-1 pull-right principal-img" alt="Responsive image" height="150px" width="150px">
                  {!! str_limit($page->content,500) !!}..<a style="color: #f6783a" href="">read more</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
      <div class="card card-default">
         <div class="card-header message"><h3 class="text-center message">{{$page->title}}</h3>
        </div>
        <div class="card-body message p">
            <img src="{{asset('public/images/pages/'.$page->image)}}" class="mt-1 pull-right principal-img " alt="Responsive image" height="150px" width="150px">
             {!! str_limit($page->content,500) !!}..<a style="color: #f6783a" href="">read more</a>
        </div>
       </div>
    </div>
    </div>
  </div>