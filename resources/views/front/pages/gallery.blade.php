@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="contact-form spad pb-0">
            <div class="section-title text-center">
                <h3>Gallery</h3>
            </div>
            <div class="gallery-section">
                <div class="gallery mb-4" >
                    <div class="grid-sizer"></div>
                    @foreach($galleries as $gallery)
                    <div class="gallery-item gi-long set-bg" data-setbg="{{asset('public/images/gallery/'.$gallery->image)}}" title="{{$gallery->title}}">
                        <a class="img-popup" href="{{asset('public/images/gallery/'.$gallery->image)}}"><i class="ti-plus"></i></a>
                    </div>
                    @endforeach
                    
                </div>
                {{$galleries->links()}}
           </div> 
        </div>
    </div>
</section>    
@endsection