@extends('layouts.main')
@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7f6;
        margin: 0;
        padding: 0;
    }

    /* Hero Section */
    .hero-section {
        background: #5cb65c;
        color: white;
        padding: 80px 0;
        text-align: center;
    }

    .hero-section h2 {
        font-size: 3rem;
        font-weight: bold;
    }

    /* Green Background Section */
    .section-bg {
        background-color: #eaf9f2;
        padding: 50px 0;
    }

    .about-image img {
        max-width: 100%;
        border-radius: 10px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    }

    .section-heading {
        font-size: 2rem;
        font-weight: 600;
        color: #5cb65c;
        margin-bottom: 20px;
    }

    .quote {
        font-style: italic;
        color: #5cb65c;
        background-color: #d1f7e2;
        padding: 20px;
        border-left: 5px solid #5cb65c;
        margin-bottom: 30px;
    }

    .service-text p {
        font-size: 1.2rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
    }

    .play-video {
        background-color: #5cb65c;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .play-video:hover {
        background-color: #4c907d;
    }

    .icon {
        font-size: 20px;
        margin-right: 10px;
    }

    /* Proper alignment and padding adjustments for better look */
    .content-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
    }

    .content-column {
        margin: 15px;
        text-align: left;
    }

    .image-column {
        flex: 1 1 45%;
        min-width: 300px;
        padding: 15px;
        text-align: center;
    }

    .text-column {
        flex: 1 1 45%;
        min-width: 300px;
        padding: 15px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-column {
            flex: 1 1 100%;
            text-align: center;
        }

        .hero-section h2 {
            font-size: 2rem;
        }

        .section-heading {
            font-size: 1.5rem;
        }

        .service-text p {
            font-size: 1rem;
        }
    }
</style>
{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Counselor <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Qualified Counselor</h1>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/images/about-1.jpeg')}});">
            </div>
            <div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
      <div class="heading-section py-md-5">
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

  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row content-row">
            <!-- Image Section -->
            <div class="col-md-5 col-12 content-column image-column">
                <img src="{{ asset('assets/images/about-1.png') }}" alt="Counselor Image" width="300px">
            </div>

            <!-- Text Content Section -->
            <div class="col-md-7 col-12 content-column text-column">
                <h2 class="section-heading">Best Counseling Funding Network Worldwide.</h2>
                
                <p>I am Arpi Parikh, founder of Nirvana Counselling.</p>
                <p>I am a compassionate and skilled psychotherapist dedicated to helping individuals and couples navigate life’s challenges with clarity and resilience. My approach is tailored, nonjudgmental, and culturally sensitive, ensuring that every client feels heard and supported.</p>

                <blockquote class="quote"> "Healing is not about erasing the past, but about reclaiming the future. It’s the art of turning wounds into wisdom and pain into strength."</blockquote>

                <p>Blending science with empathy, I integrate evidence-based therapies, including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Acceptance and Commitment Therapy (ACT), Solution-Focused Therapy, Emotionally Focused Therapy (EFT), and trauma-informed care. As a certified Gottman Method practitioner, I help couples rebuild trust, deepen connection, and turn conflict into understanding.</p>
        
                <p>With expertise in ADHD, I guide clients toward focus, organization, and emotional balance, empowering them to thrive in a world that often feels overwhelming. Therapy, in my space, is not just about healing—it’s about rediscovering joy, resilience, and the power of self-acceptance.</p>
        
                <p>Fluent in English, Hindi, and Gujarati, I ensure that language is never a barrier to mental health support. My mission is to create a safe, inclusive space where stories are honored, struggles are understood, and transformation begins.</p>
                
                <a href="https://vimeo.com/45830194" class="play-video d-flex align-items-center mt-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
                    <span class="watch">Watch Our Consultant Video</span>
                </a>
            </div>
        </div>
    </div>
</section>

  @stop