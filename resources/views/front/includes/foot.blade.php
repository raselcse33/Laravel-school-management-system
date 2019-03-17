<!--====== Javascripts & Jquery ======-->
        <script src="{{asset('public/front/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/front/js/jquery.countdown.js')}}"></script>
        <script src="{{asset('public/front/js/masonry.pkgd.min.js')}}"></script>
        <script src="{{asset('public/front/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/front/js/main.js')}}"></script>
        <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
        </body
        </html>