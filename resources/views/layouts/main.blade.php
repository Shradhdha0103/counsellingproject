<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Nirvana Counseling | Therapy Services for Individuals, Couples, and Families">
    <meta name="description" content="Nirvana Counseling provides professional counseling services for individuals, couples, and families to help them navigate life's challenges.">
    <meta name="keywords" content="therapy, counseling, mental health, individual therapy, couples counseling, teenagers therapy, ADHD support, trauma therapy">
    <meta property="og:title" content="Nirvana Counseling | Therapy Services">
    <meta property="og:description" content="Explore personalized therapy services at Nirvana Counseling. We offer individual, couples, and family counseling to support your mental health journey.">
    <meta property="og:image" content="URL to your image">
    <meta property="og:url" content="https://nirvanacounseling.ca/">
    <title>Nirvana Counseling | Therapy Services for Individuals, Couples, and Families</title>
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