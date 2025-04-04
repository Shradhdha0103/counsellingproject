<?php $setting = setting();
?><footer class="ftco-footer">
    <div class="container">
      <div class="row mb-5 text-left">
        <div class="col-sm-12 col-md-4">
          <div class="ftco-footer-widget mb-4">
            {{-- <h2 class="ftco-heading-2 logo"><a href="#">Counselor</a></h2> --}}
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets/logo/whiteBG.png')}}" class="logo" alt="Logo"></a>
            <p>{{$setting['footer_content']}}</p>
            <ul class="ftco-footer-social list-unstyled mt-2">
              {{-- <li class="ftco-animate"><a href="#"><span class="fab fa-twitter"></span></a></li> --}}
              <li class="ftco-animate"><a href="{{$setting['linkedin_link']}}" target="_blank"><span class="fab fa-linkedin"></span></a></li>
              <li class="ftco-animate"><a href="{{$setting['insta_link']}}" target="_blank"><span class="fab fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Explore</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
              <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
              <li><a href="{{route('blogs')}}"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
              <li><a href="{{route('counselor')}}"><span class="fa fa-chevron-right mr-2"></span>Counselor</a></li>
              <li><a href="{{route('privacy')}}"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
              {{-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li> --}}
              {{-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li> --}}
            </ul>
          </div>
        </div>
        {{-- <div class="col-sm-12 col-md-3">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Legal</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
              <li><a href="{{route('blog')}}"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
              
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
            </ul>
          </div>
        </div> --}}
        {{-- <div class="col-sm-12 col-md-2">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Company</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
              <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
            </ul>
          </div>
        </div> --}}
        <div class="col-sm-12 col-md-4">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  {{-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> --}}
                  <li><a href="tel://15875809055"><span class="icon fa fa-phone"></span><span class="text">+1 5875809055</span></a></li>
                  <li><a href="{{ URL::to('mailto:gofornirvana@gmail.com') }}"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">gofornirvana@gmail.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
      
              {{-- <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p> --}}
    <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
    </div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assets/js/scrollax.min.js')}}"></script>
<script src="{{asset('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
<script src="{{asset('assets/js/google-map.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  function toggleContent() {
      var moreContent = document.getElementById("moreContent");
      var readMoreLink = document.querySelector(".read-more");
      
      if (moreContent.style.display === "none" || moreContent.style.display === "") {
          moreContent.style.display = "block";
          readMoreLink.textContent = "Read less";
      } else {
          moreContent.style.display = "none";
          readMoreLink.textContent = "Read more";
      }
  }

  // Fancybox Configuration
  $( window ).resize(function() {
	onWindowResize();
});

onWindowResize();

function onWindowResize() {
	$('.screen-width-value').text($(window).width());	
}
</script>