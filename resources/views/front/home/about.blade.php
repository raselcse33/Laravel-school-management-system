<div class="card card-default mt-3">
      <div class="card-header about-school">
         <h3 class="text-center about-school">{{$page->title}}</h3>
       </div>
        <div class="card-body about-school p">
             {!!str_limit($page->content,1500)!!}
         </div>
      </div>