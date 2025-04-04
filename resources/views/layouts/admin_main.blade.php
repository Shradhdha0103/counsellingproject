<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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
    <title>Nirvana Admin panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{asset('assets/logo/nirvana_logo.png')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/jqvmap/dist/jqvmap.min.css')}}">
   

    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>
<body>
    @include('layouts.admin_sidebar')
    @include('layouts.admin_header')
    {{-- <div class="loader-section">
       <div class="loader loader-1">
           <div class="loader-outter"></div>
           <div class="loader-inner"></div>
       </div>
   </div> --}}
   @yield('content')
</div>
@include('layouts.admin_footer')
</body>
</html>