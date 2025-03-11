@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Multilingual Clients <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Multilingual Clients</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <h2 class="service_title">Multilingual Support at Nirvana Counseling</h2>
        <p>At Nirvana Counseling, we understand the power of language in creating connection, trust, and understanding. Whether you're more comfortable in English, Hindi, or Gujarati, we offer therapy in multiple languages to ensure you feel truly heard and supported. Our culturally sensitive and non-judgmental approach helps you express yourself fully, no matter the language you speak.</p>
        <h2 class="service_title">Your Story, Your Language</h2>
        <p>We believe that healing begins when you can communicate your thoughts, emotions, and experiences in a language that feels natural to you. Whether it’s managing stress, navigating relationships, or addressing mental health concerns, we are here to provide you with the tools and support you need in a language you’re comfortable with.
          Feel at ease and empowered to begin your journey towards mental wellness, with therapy that speaks your language.
          </p>
    </div>
</section>
@stop