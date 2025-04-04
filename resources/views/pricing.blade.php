@extends('layouts.main')
@section('content')

<style>
  .gallery {
  counter-reset: items;
  display: grid;
  grid-auto-rows: calc(75vw - 2rem);
  grid-gap: 1rem;
  margin: 0 auto;
  max-width: 87.5rem;
  padding: 3rem 1rem;
}
@media screen and (min-width: 30rem) {
  .gallery {
    grid-template-columns: repeat(auto-fit, minmax(13.5rem, 1fr));
    grid-auto-rows: 9rem;
    grid-auto-flow: dense;
  }
}
@media screen and (min-width: 70rem) {
  .gallery {
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
    grid-auto-rows: 16.5rem;
  }
}
.gallery__img {
  align-items: center;
  background-color: #dadada;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  display: flex;
  justify-content: center;
}
/* .gallery__img::before {
  color: #dadada;
  counter-increment: items;
  content: counter(items);
  font-size: 2rem;
  font-weight: 700;
  display: flex;
  background-color: rgba(0, 0, 0, 0.5);
  width: 4rem;
  height: 2em;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
} */
@media screen and (min-width: 30rem) {
  .gallery__img--wide {
    grid-column: span 2;
    grid-row: span 2;
  }
  .gallery__img--tall {
    grid-row: span 2;
  }
  .gallery__img--feature {
    grid-column: span 2;
    grid-row: span 3;
  }
}
@media screen and (min-width: 30rem) and (min-width: 44.5rem) {
  .gallery__img--feature {
    grid-column: span 3;
    grid-row: span 3;
  }
}
@media screen and (min-width: 30rem) {
  .gallery__img--feature-tall {
    grid-column: span 2;
    grid-row: span 3;
  }
}

.screen-width {
  color: #999;
  font-size: 0.875rem;
  padding: 1rem;
  position: fixed;
  right: 0;
  top: 0;
}
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Pricing</h1>
          {{-- <h1 class="mb-0 bread">Pricing &amp; Plans</h1> --}}
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section bg-light">
      <div class="container">
        
        <h2 class="service_title">Our Pricing - Affordable and Flexible Support</h2>
        <p>
          At Nirvana Counseling, we believe that quality mental health support should be within reach for everyone. We offer a range of pricing options to accommodate different financial needs, ensuring that you can receive the care you deserve without unnecessary stress.
        </p>

        <h2 class="service_title">Standard Rates</h2>
        <p>Our standard rates align with industry guidelines, ensuring transparency and fairness. A typical session is priced starts at $150 for a 50-minute appointment, in line with the recommended rate by professional associations.</p>

        <h2 class="service_title">Sliding Scale</h2>
        <p>We understand that financial circumstances can sometimes make accessing therapy difficult. To make therapy more accessible, we offer a sliding scale based on your specific situation. If you are experiencing financial challenges, don’t hesitate to reach out and discuss a rate that works for you.</p>

        <h2 class="service_title">Insurance and Benefits</h2>
        <p>Many extended health benefit plans cover psychological services, and we work with a variety of insurance providers to streamline the reimbursement process. We encourage you to review your plan’s details, including session limits and coverage rates, and we are happy to assist with direct billing, where applicable.</p>

        <h2 class="service_title">Flexible Payment Methods</h2>
        <p>To make things easier, we accept a range of payment methods, including credit cards, debit, and e-transfer. Payments are due at the time of your appointment, and we provide receipts for your records or insurance claims.</p>

        <h2 class="service_title">Invest in Your Well-Being</h2>
        <p>We know therapy is a significant investment in your future and mental health. Our goal at Nirvana Counseling is to make sure you receive the support you need in a way that fits your unique financial situation.</p>

        <p>If you have any questions about our fees, insurance, or payment options, please reach out. We’re here to help you take the first step toward a healthier, more balanced life.</p>

        <p>Above how does it work, I want to add this-At Nirvana Counseling, we recognize that life can be overwhelming, and sometimes, the best way to reset is by seeking support. We understand that virtual therapy best suits the needs and lifestyles of many of our clients. That’s why we are fully committed to providing the highest standard of online counseling, ensuring accessible, confidential, and effective support from the comfort of your home.</p>
        <p>We offer secure, evidence-based therapy to help you navigate life’s challenges with ease and flexibility. Whether you’re seeking clarity, healing, or personal growth, we’re here to support you every step of the way.</p>
        <p>Feel free to review our policies to learn more about consent, confidentiality, electronic communication, and more.
          Your well-being is our priority—let’s embark on this journey together, wherever you are.
        </p>
      </div>
  </section>

  <div class="gallery">
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/1.jpeg')}}');"></div>
    <div class="gallery__img gallery__img--tall" style="background-image: url('{{asset('assets/img_gellery/2.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/3.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/4.jpeg')}}');"></div>
    <div class="gallery__img gallery__img--feature-tall" style="background-image: url('{{asset('assets/img_gellery/5.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/6.jpeg')}}');"></div>
    <div class="gallery__img gallery__img--tall" style="background-image: url('{{asset('assets/img_gellery/7.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/8.jpeg')}}');"></div>
    {{-- <div class="gallery__img gallery__img--wide" style="background-image: url('{{asset('assets/img_gellery/9.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/10.jpeg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/11.jpeg')}}');"></div> --}}
    {{-- <div class="gallery__img gallery__img--feature" style="background-image: url('{{asset('assets/img_gellery/11.jpg')}}');"></div> --}}
    {{-- <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/12.jpg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/13.jpg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/14.jpg')}}');"></div>
    <div class="gallery__img gallery__img--wide" style="background-image: url('{{asset('assets/img_gellery/15.jpg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/16.jpg')}}');"></div>
    <div class="gallery__img" style="background-image: url('{{asset('assets/img_gellery/17.jpg')}}');"></div> --}}
  </div>
  
  <div class="screen-width">Viewport Width: <span class="screen-width-value">1400</span>px</div>
@stop