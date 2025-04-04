
@extends('layouts.main')
@section('content')

@if($slug->slug != 'counselor')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>{{$slug->title}} <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">{{$slug->title}}</h1>
        </div>
      </div>
    </div>
  </section>
  @endif

 <section class="ftco-section">
  <div class="container">
            {!! $slug->desc !!}
  </div>
 </section>
@stop