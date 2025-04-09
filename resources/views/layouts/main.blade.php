@php
  $metaData = seoPage($pagename);      
  $color = setting();
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{@$metaData['title']}}">
    <meta name="description" content="{{@$metaData['description']}}">
    <meta name="keywords" content="{{@$metaData['key_word']}}">
    <meta property="og:title" content="{{@$metaData['title']}}">
    <meta property="og:description" content="{{@$metaData['description']}}">
    <meta property="og:image" content="URL to your image">
    <meta property="og:url" content="https://nirvanacounseling.ca/">
    {{-- <title>Nirvana Counseling | Therapy Services for Individuals, Couples, and Families</title> --}}
    <title>{{@$metaData['title']}}</title>
    <link rel="shortcut icon" href="{{asset('assets/logo/nirvana_logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>
  <?php 
  $color = e(setting()->color);  // Use e() to escape the color value
  $font = e(setting()->fonts);   // Use e() to escape the font value
  ?>
<style>
    .hero-overly, .hero-wrap.hero-wrap-2 .overlay {
    background: linear-gradient(45deg, <?=$color?> 0%, rgba(88, 145, 103, 0) 100%)!important;
    }
    .wrap, .ftco-appointment .overlay {
    background-color: <?=$color?>;
    }
    .navbar-nav .nav-link.active, #ftco-nav .active, .ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover, .contactForm .label, .dbox p a, .heading-section .subheading, .blog-entry .meta span.day, .services-2:hover .icon-wrap .number span, .service_title, blockquote{
        color: <?=$color?> !important;
    }
    .btn.btn-primary, .tabulation .nav-pills .nav-item .nav-link.active{
        background-color : <?=$color?> !important;
        border-color: <?=$color?> !important;
    }
    .ftco-footer-social li a, .blog-entry:hover .meta, .services-2:hover .icon, .services-2 .icon-wrap .number, .dbox .icon{
        background:  <?=$color?> !important;
    }
    .btn-primary{
        background-color : <?=$color?> !important;
        background-image: linear-gradient(to bottom, ${color} 0%, #429342 100%) !important;
    }
    .blog-entry:hover .meta .day {
         color: #fff !important;
         /* background:  <?=$color?> !important; */
    }
    .services-2 .icon:after{
        background:  <?=$color?> !important;
    }
    .ftco-intro .intro.aside-stretch{
        background:  <?=$color?> !important;
        filter: brightness(1.2); 
    }
    .ftco-intro .intro.aside-stretch:after{
        background:  <?=$color?> !important;
        /* filter: brightness(1.2);  */
    }
    .intro.color-1{
        background:  <?=$color?> !important;
    }
    .intro.color-2
    {
        background:  <?=$color?> !important;
        filter: brightness(0.8);
    }
    html, body, samp, input, button, select, optgroup, textarea, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 , .tooltip, .popover, .text-monospace, body {
        font-family: "<?=$font?>" !important;
    }
</style>
  <body>
    <div id="right-panel" class="right-panel">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2">
                            <a href="tel://15875809055" class="mr-2"><span class="fa fa-phone mr-1"></span>+1 5875809055</a> 
                            <a href="{{ URL::to('mailto:gofornirvana@gmail.com') }}"><span class="fa fa-paper-plane mr-1"></span>gofornirvana@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-media">
                        <p class="mb-0 d-flex">
                            {{-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a> --}}
                            {{-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a> --}}
                            <a href="https://www.instagram.com/nirvana_counseling/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="https://www.linkedin.com/in/arpi-parikh-5b346096/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fab fa-linkedin"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')
         {{-- <div class="loader-section">
            <div class="loader loader-1">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div> --}}
        @yield('content')
    </div>
    @include('layouts.footer')
</body>

</html>
