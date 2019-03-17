<section class="hero-section">
    <div class="hero-slider owl-carousel">
         @foreach($sliders as $slider)
        <div  class="hs-item set-bg"  data-setbg="{{asset('public/images/sliders/'.$slider->slider)}}">
            <div class="hs-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="hs-des  slider-transparent">{{$slider->title}}</h4>
                            <p class="hs-des  slider-transparent">{{$slider->sub_title}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>