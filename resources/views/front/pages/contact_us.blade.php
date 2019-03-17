@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="contact-form spad pb-0">
            <div class="section-title text-center">
                <h3>GET IN TOUCH</h3>
                <p>Contact us for best deals and offer</p>
            </div>
            <form class="comment-form ">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" placeholder="Subject">
                    </div>
                    <div class="col-lg-12">
                        <textarea placeholder="Message"></textarea>
                        <div class="text-center">
                            <button class="site-btn">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>    
@endsection