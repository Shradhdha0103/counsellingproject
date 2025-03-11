@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Counselor <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Qualified Counselor</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/images/about-1.jpg')}});">
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
</section>

  {{-- <section class="ftco-section bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-1.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Lloyd Wilson</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-2.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Rachel Parker</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-3.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Ian Smith</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-4.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Alicia Henderson</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-5.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Lloyd Wilson</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-6.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Rachel Parker</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-7.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Ian Smith</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/staff-8.jpg')}});"></div>
                          </div>
                          <div class="text pt-3 px-3 pb-4 text-center">
                              <h3>Fred Henderson</h3>
                              <span class="position mb-2">Counselor</span>
                              <div class="faded">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                      <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Price &amp; Plans</span>
          <h2>Affordable Packages</h2>
        </div>
      </div>
          <div class="row">
              <div class="col-md-4 ftco-animate d-flex">
            <div class="block-7 w-100">
              <div class="text-center">
                  <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
                  <span class="excerpt d-block">For Adults</span>
                  <ul class="pricing-text mb-5">
                    <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
                    <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
                    <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
                  </ul>

                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate d-flex">
            <div class="block-7 w-100">
              <div class="text-center">
                  <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
                  <span class="excerpt d-block">For Children</span>
                  <ul class="pricing-text mb-5">
                    <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
                    <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
                    <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
                  </ul>

                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate d-flex">
            <div class="block-7 w-100">
              <div class="text-center">
                  <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
                  <span class="excerpt d-block">For Business</span>
                  <ul class="pricing-text mb-5">
                    <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
                    <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
                    <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
                  </ul>

                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section> --}}

  @stop