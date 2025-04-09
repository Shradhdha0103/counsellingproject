@extends('layouts.main')
@section('content')
<style>
  .thankmsg{
    color: #ffffff;
  }
</style>
<?php $setting = setting();?>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('{{asset('storage/app/private/public/banner_img')}}/{{$setting->banner_img}}');">
  {{-- <div class="hero-wrap" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
<div class="overlay"></div>
<div class="hero-overly">
<div class="container">
<div class="row no-gutters slider-text align-items-center">
  <div class="col-md-6 ftco-animate d-flex align-items-end">
      <div class="text w-100">
        <h1 class="mb-4">{{$setting['title']}}</h1>
        <p class="mb-4">{{$setting['sub_title']}}</p>
        <div class="read-more-content" id="moreContent">
          <p>{{$setting['readmore_content']}}</p>
      </div>
        <p><a href="{{$setting['contact_link']}}" class="btn btn-primary py-3 px-4">Contact us</a> <a href="#" class="btn btn-white py-3 px-4 read-more" onclick="toggleContent()">Read more</a></p>
     
  
    </div>
  </div>
  {{-- <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
      <span class="fa fa-play"></span>
  </a> --}}
</div>
</div>
</div>
</div>

<section class="ftco-intro">
<div class="container">
    <div class="row no-gutters">
        <div class="col-md-4 d-flex">
            <div class="intro aside-stretch d-lg-flex w-100">
                <div class="icon">
                    <span class="flaticon-checklist"></span>
                </div>
                <div class="text">
                    <h2>{{$setting['banner_title1']}}</h2>
                    <p>{{$setting['banner_content1']}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="intro color-1 d-lg-flex w-100">
                <div class="icon">
                    <span class="flaticon-employee"></span>
                </div>
                <div class="text">
                    {{-- <h2>Qualified Team</h2> --}}
                    <h2>{{$setting['banner_title2']}}</h2>
                    <p>{{$setting['banner_content2']}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="intro color-2 d-lg-flex w-100">
                <div class="icon">
                    <span class="flaticon-umbrella"></span>
                </div>
                <div class="text">
                    {{-- <h2>Individual Approach</h2> --}}
                    <h2>{{$setting['banner_title3']}}</h2>
                    <p>{{$setting['banner_content3']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">{{$setting['work_title']}}</span>
    {{-- <h2>How It Works</h2> --}}
  </div>
</div>
    <div class="row">
        <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
                <div class="icon-wrap">
                    <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-calendar"></span>
                    </div>
                </div>
                <h2>{{$setting['getin_touch_title']}}</h2>
                <p>{{$setting['getin_touch_content']}}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
                <div class="icon-wrap">
                    <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-qa"></span>
                    </div>
                </div>
                <h2>{{$setting['first_session_title']}}</h2>
                  <p>{{$setting['first_session_content']}}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
                <div class="icon-wrap">
                    <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-checklist"></span>
                    </div>
                </div>
                <h2>{{$setting['beginyour_path_title']}}</h2>
                  <p>{{$setting['beginyour_path_content']}}</p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="">
  <div class="container">
      <div class="row justify-content-center">
    <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">{{$setting['therapy_heading']}}</span>
      <h2>{{$setting['therapy_title']}}</h2>
    </div>
  </div>
      <div class="row">
        <p>{{$setting['therapy_content']}}</p>

        {{-- <p>Whether you seek clarity, healing, or growth, we’re here to guide you every step. Explore our policies to learn more about consent, confidentiality, and electronic communication. Your well-being is our top priority—let’s embark on this transformative journey together.</p> --}}
      </div>
  </div>
  </section>



{{-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/images/about-1.jpg')}});">
            </div>
            <div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
      <div class="heading-section">
          <span class="subheading">Welcome to Counselor</span>
        <h2 class="mb-4">Best Counseling Funding Network Worldwide.</h2>

        <p>I am Arpi Parikh, founder of Nirvana Counselling.</p>
        <p>I am a compassionate and skilled psychotherapist dedicated to helping individuals and couples navigate life’s challenges with clarity and resilience. My approach is tailored, nonjudgmental, and culturally sensitive, ensuring that every client feels heard and supported.</p>

        <blockquote> "Healing is not about erasing the past, but about reclaiming the future. It’s the art of turning wounds into wisdom and pain into strength."</blockquote>
        <p>  Blending science with empathy, I integrate evidence-based therapies, including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Acceptance and Commitment Therapy (ACT), Solution-Focused Therapy, Emotionally Focused Therapy (EFT), and trauma-informed care. As a certified Gottman Method practitioner, I help couples rebuild trust, deepen connection, and turn conflict into understanding.</p>

         <p> With expertise in ADHD, I guide clients toward focus, organization, and emotional balance, empowering them to thrive in a world that often feels overwhelming. Therapy, in my space, is not just about healing—it’s about rediscovering joy, resilience, and the power of self-acceptance.</p>
          <p>Fluent in English, Hindi, and Gujarati, I ensure that language is never a barrier to mental health support. My mission is to create a safe, inclusive space where stories are honored, struggles are understood, and transformation begins.
          </p>


        <a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center mt-4">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
            <span class="watch">Watch Our Consultant Video</span>
        </a>
      </div>

            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
  <div class="col-md-8 text-center heading-section ftco-animate">
      <span class="subheading">Our Services</span>
    <h2 class="mb-3">We’re here to guide you through this challenge and help you find the way forward</h2>
  </div>
</div>
        <div class="row tabulation mt-4 ftco-animate">
          <div class="col-md-4">
                <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                  @foreach ($serviceMaster as $key => $service)                      
                  <li class="nav-item text-left">
                    <a class="nav-link py-4 @if(@$key == 0) active @endif" data-toggle="tab" href="#services-{{@$key}}">{{$service->title}}</a>
                  </li>
                  @endforeach
                  {{-- <li class="nav-item text-left">
                    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Individual Therapy</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Couples Counseling</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Teenagers and Young Adults</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-4">ADHD Support</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Trauma-Informed Therapy</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-6">DBT group</a>
                  </li>
                  <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-7">Multilingual Clients</a>
                  </li> --}}
                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                  @foreach ($serviceMaster as $key => $data) 
                  <div class="tab-pane container p-0 @if(@$key == 0) active @endif" id="services-{{@$key}}">
                    <div class="img" style="background-image: url('{{asset('storage/app/private/public/services')}}/{{$data->image}}');"></div>
                    <h3><a href="#">{{$data->title}}</a></h3>
                    <p>{{$data->sub_title}}</p>
                </div>
                  @endforeach
                  {{-- <div class="tab-pane container p-0 active" id="services-1">
                      <div class="img" style="background-image: url({{asset('assets/images/services-1.jpg')}});"></div>
                      <h3><a href="#">Individual Therapy</a></h3>
                      <p>Every soul is a masterpiece, each with its own story, its own battles. Individual therapy offers a sacred space where you are seen, heard, and understood in your truest form. Whether you're navigating the weight of anxiety, the shadows of depression, or the shifting tides of life’s transitions, therapy is your canvas—an opportunity to explore, heal, and grow. Through this journey, we’ll guide you toward a place of self-awareness, resilience, and the fulfillment of your unique potential.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-2">
                      <div class="img" style="background-image: url({{asset('assets/images/services-2.jpg')}});"></div>
                      <h3><a href="#">Couples Counseling</a></h3>
                      <p>Relationships are the heart of our lives, weaving us together in love, connection, and support. Yet, even the closest bonds can falter, leaving us feeling lost, misunderstood, or distant. At Nirvana Counseling, we offer a safe space where individuals and couples can unravel their struggles, find clarity, and rebuild the ties that bind them with compassion and understanding.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-3">
                      <div class="img" style="background-image: url({{asset('assets/images/services-3.jpg')}});"></div>
                      <h3><a href="#">Teenagers and Young Adults</a></h3>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-4">
                      <div class="img" style="background-image: url({{asset('assets/images/services-4.jpg')}});"></div>
                      <h3><a href="#">ADHD Support</a></h3>
                      <p>Life as a teenager or young adult can feel like riding a rollercoaster—full of highs, lows, and unexpected twists. At Nirvana Counseling, we get it. The journey of growing up comes with pressure, self-discovery, and the constant search for balance. Whether you’re dealing with stress, relationships, or figuring out your next steps, we’re here to guide you through it.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-5">
                      <div class="img" style="background-image: url({{asset('assets/images/services-5.jpg')}});"></div>
                      <h3><a href="#">Trauma-Informed Therapy</a></h3>
                      <p>At Nirvana Counseling, we believe healing doesn’t happen through ignoring or avoiding the past. It comes from understanding, addressing, and gently working through the wounds. Our Trauma-Informed Therapy approach begins with the simple, yet profound idea: You are not your trauma. You are more than the pain you’ve experienced.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-6">
                      <div class="img" style="background-image: url({{asset('assets/images/services-6.jpg')}});"></div>
                      <h3><a href="#">DBT group</a></h3>
                      <p>Imagine being caught in a whirlwind of emotions, feeling overwhelmed by everything around you, and not knowing how to regain control. For many, emotions can feel like a storm—intense, unpredictable, and hard to manage. That’s where Dialectical Behavior Therapy (DBT) can make a powerful difference. At Nirvana Counseling, our DBT Group Therapy provides a safe and supportive environment where you can learn to navigate these emotional storms and build a life you feel in control of.</p>
                  </div>
                  <div class="tab-pane container p-0 fade" id="services-7">
                    <div class="img" style="background-image: url({{asset('assets/images/services-6.jpg')}});"></div>
                    <h3><a href="#">Multilingual Clients</a></h3>
                    <p>At Nirvana Counseling, we understand the power of language in creating connection, trust, and understanding. Whether you're more comfortable in English, Hindi, or Gujarati, we offer therapy in multiple languages to ensure you feel truly heard and supported. Our culturally sensitive and non-judgmental approach helps you express yourself fully, no matter the language you speak.</p>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-appointment ftco-section img" style="background-image: url('{{asset('storage/app/private/public/contact_background_img')}}/{{$setting->contact_background_img}}');">
  {{-- <section class="ftco-appointment ftco-section img" style="background-image: url('{{asset('storage/app/private/public/contact_background_img')}}/{{$setting->contact_background_img}}');"> --}}
  {{-- <section class="ftco-appointment ftco-section img" style="background-image: url({{asset('assets/images/bg_2.jpg')}});"> --}}
    <div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6 half ftco-animate">
            {{-- <h2 class="mb-4">Send a Message &amp; Get in touch!</h2> --}}
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
            <h2>We're Here to Help</h2>
            <form method="POST" action="{{ route('contact') }}" class="appointment">
              @csrf
                <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                      </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-field">
                          <div class="select-wrap">
                  <div class="icon"><span class="fa fa-chevron-down"></span></div>
                  <select name="services" id="services" class="form-control">
                    <option value="">Select Service</option> <!-- Default option -->
                    @foreach  ($serviceMaster as $item)
                    <option value="{{$item->title}}">{{$item->title}}</option>
                    @endforeach
                </select>
                </div>
                  </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                  <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                </div>
                        </div>
                </div>
      </form>
      @endif
        </div>
    </div>
</div>
</section>

{{-- <section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-5">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Blog</span>
    <h2>Recent Blog</h2>
  </div>
</div>
<div class="row d-flex">
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
      <div class="text text-center">
          <a href="blog-single.html" class="block-20 img" style="background-image: url('{{asset('assets/images/image_1.jpg')}}');">
          </a>
          <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
            <div>
                <span class="day">18</span>
                <span class="mos">April</span>
                <span class="yr">2020</span>
            </div>
        </div>
        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
      <div class="text text-center">
          <a href="blog-single.html" class="block-20 img" style="background-image: url('{{asset('assets/images/image_2.jpg')}}');">
          </a>
          <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
            <div>
                <span class="day">18</span>
                <span class="mos">April</span>
                <span class="yr">2020</span>
            </div>
        </div>
        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
      <div class="text text-center">
          <a href="blog-single.html" class="block-20 img" style="background-image: url('{{asset('assets/images/image_3.jpg')}}');">
          </a>
          <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
            <div>
                <span class="day">18</span>
                <span class="mos">April</span>
                <span class="yr">2020</span>
            </div>
        </div>
        <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>              
                    </div>
    </div>
  </div>
</div>
</div>
</section>	 --}}



@stop