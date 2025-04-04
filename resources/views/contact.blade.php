@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper px-md-4">
                    <div class="row mb-5" style="font-size: small !important;">
                        <div class="col-md-4 col-sm-6">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <br><a href="tel://15875809055">+1 5875809055</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span><br> <a href="mailto:gofornirvana@gmail.com">gofornirvana@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website:</span><br> <a href="https://nirvanacounseling.ca">https://nirvanacounseling.ca</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <!-- Success message -->
                                @if(session('success'))
                                <div class="">
                                    <h1 class="thankmsg">{{ session('success') }}</h1>
                                </div>
                                @endif

                                <!-- Error message -->
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif

                                @if(!session('success'))
                                <h3 class="mb-4">Contact Us</h3>
                                <form method="POST" action="{{ route('contact') }}" id="contactForm" name="contactForm" class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="phone">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop