
@extends('layouts.main')
@section('content')
<?php 
$color = e(setting()->color);  // Use e() to escape the color value
$font = e(setting()->fonts);   // Use e() to escape the font value
?>
<style>
  h1, h2, h3 {
  color: <?=$color?>;
  }
  html, body, samp, input, button, select, optgroup, textarea, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 , .tooltip, .popover, .text-monospace, body, div, section {
        font-family: "<?=$font?>" !important;
    }
</style>
@if($cmsdata->slug != 'counselor')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('storage/app/private/public/CMS_image')}}/{{$cmsdata->banner_image}}');" data-stellar-background-ratio="0.5">
  {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>{{$cmsdata->title}} <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">{{$cmsdata->title}}</h1>
        </div>
      </div>
    </div>
  </section>
  @endif

 <section class="ftco-section">
  <div class="container">
            {!! $cmsdata->desc !!}
  </div>
 </section>
@stop