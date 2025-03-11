@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>ADHD Support <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">ADHD Support</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
            <h2 class="service_title">ADHD Treatment at Nirvana Counseling</h2>
              <p>At Nirvana Counseling, we offer personalized support to help individuals with ADHD thrive. Whether you’re struggling with focus, organization, or impulsivity, we provide strategies that can help you regain control and unlock your full potential.</p>
              <h2 class="service_title">What is ADHD?</h2>
              <p>ADHD is a neurodevelopmental condition that affects attention, impulse control, and energy levels. It often manifests as difficulties in focusing, staying organized, or managing time effectively. Symptoms can vary but typically include:</p>
              <ul>
                  <li>Trouble sustaining attention</li>
                  <li>Forgetting things or losing items</li>
                  <li>Struggles with time management and meeting deadlines</li>
                  <li>Restlessness and impulsive behaviors</li>
              </ul>
      
              {{-- <h2 class="service_title">ADHD Types</h2> --}}
              <h2 class="service_title">ADHD can present in three forms:</h2>
              <ul>
                  <li><strong>Inattentive:</strong> Trouble maintaining focus and completing tasks</li>
                  <li><strong>Hyperactive-Impulsive:</strong> Restlessness and impulsive behavior</li>
                  <li><strong>Combined:</strong> A mix of both inattentive and hyperactive-impulsive symptoms</li>
              </ul>
      
              <h2 class="service_title">Why ADHD Happens</h2>
              <p>ADHD isn’t caused by poor parenting or laziness. It's a neurological condition influenced by genetics, brain structure, and environmental factors. Understanding these causes is key to managing and thriving with ADHD.</p>
      
              <h2 class="service_title">ADHD Across Life Stages</h2>
              <p>ADHD isn’t just a childhood condition. Adults with ADHD may face challenges like chronic lateness, disorganization, emotional regulation issues, and difficulty maintaining relationships. Without treatment, these struggles can lead to frustration, low self-esteem, and hinder progress in various areas of life.</p>
      
              <h2 class="service_title">How Nirvana Counseling Can Help</h2>
              <p>At Nirvana Counseling, we know ADHD affects everyone differently. Our experienced therapists collaborate with you to understand your unique challenges and create personalized strategies. With the right tools, you can harness your strengths and succeed in personal, academic, and professional goals.</p>
      
              <p>ADHD presents challenges, but with the right support, you can thrive. Nirvana Counseling is here to guide you every step of the way.</p>
    </div>
</section>
@stop