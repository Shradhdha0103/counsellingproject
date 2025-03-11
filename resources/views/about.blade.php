@extends('layouts.main')
@section('content')
<style>

ul {
  list-style-type: disc;
  margin-left: 20px;
  font-size: 1.1rem;
}
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>

 <section class="ftco-section">
  <div class="container">
            <h2 class="service_title">Welcome to Nirvana Counseling</h2>
            <p>Imagine walking through life, carrying the weight of unanswered questions, emotional struggles, or unresolved pain. For many, life can feel like a series of hurdles—each one more challenging than the last. At Nirvana Counseling, we understand that navigating these obstacles isn’t always easy. But we also believe that the journey toward healing and balance begins with the simple act of reaching out for support.</p>

            <h2 class="service_title">Our Mission</h2>
            <p>Founded on the belief that every individual deserves a safe, compassionate space to heal, Nirvana Counseling is here to walk alongside you. Our mission is to help individuals, couples, and families find peace within themselves, navigate life’s challenges, and build stronger, healthier connections.</p>
            <p>Whether you're dealing with anxiety, struggling in your relationships, or carrying the scars of past trauma, we’re here to help you find clarity and strength to move forward.</p>

            <h2 class="service_title">Our Approach</h2>
            <p>Our approach is not a one-size-fits-all method. We draw from evidence-based therapies, including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Acceptance and Commitment Therapy (ACT), and Emotionally Focused Therapy (EFT)—tailored to meet your unique needs and goals. Each therapy is thoughtfully designed to help you understand yourself better, manage your emotions, and overcome the hurdles that have been holding you back.</p>
      
            <h2 class="service_title">Specializations</h2>
            <ul>
              <li>ADHD</li>
              <li>Trauma</li>
              <li>Relationship Issues</li>
              <li>Personal Development</li>
            </ul>
            <p>We empower you to turn your challenges into stepping stones for transformation.</p>

            <h2 class="service_title">Culturally Sensitive Approach</h2>
            <p>At Nirvana Counseling, we take a culturally sensitive approach, recognizing the importance of language and understanding in the healing process. We offer therapy in English, Hindi, and Gujarati, so you can express yourself in the language that feels most comfortable to you, without fear of being misunderstood.</p>

            <h2 class="service_title">Empowerment and Healing</h2>
            <p>Healing doesn’t happen overnight, but with the right tools, guidance, and support, it’s always possible. At Nirvana Counseling, we’re not here just to help you get through the tough times—we’re here to empower you to thrive. Every step of the way, we’ll be by your side, ready to guide you toward a future that feels brighter, more balanced, and filled with possibility.</p>
            <p>So, if you're ready to take that first step, we’re here to support you, every step of the way.</p>

  </div>
 </section>

      {{-- <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
      <div class="container">
          <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text align-items-center">
              <strong class="number" data-number="3000">0</strong>
              <span>Our Satisfied  &amp; Happy Customers</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text align-items-center">
              <strong class="number" data-number="30">0</strong>
              <span>Years of Experience In Business</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text align-items-center">
              <strong class="number" data-number="200">0</strong>
              <span>Our Qualified Counselor</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text align-items-center">
              <strong class="number" data-number="40">0</strong>
              <span>Services Points</span>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section> --}}


  {{-- <section class="ftco-section testimony-section">
      <div class="img img-bg border" style="background-image: url({{asset('assets/images/bg_4.jpg')}});"></div>
      <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Happy Clients</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('assets/images/person_3.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
      
      {{-- <section class="ftco-appointment ftco-section img" style="background-image: url({{asset('assets/images/bg_2.jpg')}});">
          <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-6 half ftco-animate">
                  <h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
                  <form action="#" class="appointment">
                      <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                      </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                  <div class="form-field">
                                <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                        <select name="" id="" class="form-control">
                            <option value="">Services</option>
                          <option value="">Relation Problem</option>
                          <option value="">Couple Counseling</option>
                          <option value="">Depression Treatment</option>
                          <option value="">Family Problem</option>
                          <option value="">Personal Problem</option>
                          <option value="">Business Problem</option>
                        </select>
                      </div>
                        </div>
                              </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                      </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                        <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                      </div>
                              </div>
                      </div>
            </form>
              </div>
          </div>
      </div>
  </section> --}}
@stop