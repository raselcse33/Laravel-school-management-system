 <!-- marquee section strat  -->
    <div class="container w-100">
        <div class="row mt-3 mx-0 justify-content-center align-items-center border" style="">
            <div style="background-color: #020031;" class="col-md-1 col-3 py-2 text-center">
                <span style="color: white">Notice</span>
            </div>
            <div class="col-md-11 col-9 d-flex  py-2 p-0">
                <marquee behavior="scroll" direction="left" class="">
                     @foreach ($posts as $title)
                    <a class="marquee-text" href="{{ url('post/'. $title->slug) }}">{{$title->title}}</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>
<!-- marquee section strat  -->