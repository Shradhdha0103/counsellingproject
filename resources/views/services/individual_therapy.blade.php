@extends('layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Individual Therapy <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Individual Therapy</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
            <h2 class="service_title">Individual counseling at Nirvana Counseling</h2>
            <p>Life flows like a river—sometimes calm, sometimes turbulent. At Nirvana Counseling, we offer a safe harbor where you can pause, reflect, and navigate the currents of your emotions, experiences, and struggles. Whether you're an adult unraveling life’s complexities, a teen finding your voice, or a child seeking comfort in an ever-changing world, our compassionate, client-centered approach meets you where you are. Here, healing is not just about overcoming obstacles but about discovering the strength, clarity, and growth that already exist within you.</p>
            
            <h2 class="service_title">Why Choose Individual Therapy?</h2>
            <p>Every soul is a masterpiece, each with its own story, its own battles. Individual therapy offers a sacred space where you are seen, heard, and understood in your truest form. Whether you're navigating the weight of anxiety, the shadows of depression, or the shifting tides of life’s transitions, therapy is your canvas—an opportunity to explore, heal, and grow. Through this journey, we’ll guide you toward a place of self-awareness, resilience, and the fulfillment of your unique potential.</p>

            <h2 class="service_title">Our Approach</h2>
            <p>At Nirvana Counseling, we meet you at the crossroads of your journey, honoring where you are right now. In a space free from judgment, your story unfolds with freedom and trust. Using proven therapeutic techniques, we walk alongside you—together identifying your goals, crafting strategies, and transforming challenges into opportunities. Our mission is simple: to build a deep, trusting connection that empowers you to navigate your path toward clarity, growth, and lasting healing.</p>

            <h2 class="service_title">We are experienced in helping individuals with a wide range of concerns, including:</h2>
            {{-- <ul>
                <li>Behavioural and/or Substance Addictions</li>
                <li>Attention-Deficit Hyperactivity Disorder (ADHD)</li>
                <li>Relationship Counseling</li>
                <li>Personality Disorder</li>
                <li>Obsessive Compulsive Disorder (OCD)</li>
                <li>Post-Partum Depression / Anxiety</li>
                <li>PTSD</li>
                <li>Sexual Disorder</li>
                <li>Depressive Disorder</li>
                <li>Anxiety Disorder</li>
                <li>Stress Management</li>
                <li>Therapy for Teens and Children</li>
            </ul> --}}

            <div class="service-list">
              <div class="service-item">Behavioral & Substance Addictions</div>
              <div class="service-item">Attention-Deficit Hyperactivity Disorder(ADHD)</div>
              <div class="service-item">Relationship Counseling</div>
              <div class="service-item">Personality Disorder</div>
              <div class="service-item">Obsessive Compulsive Disorder(OCD)</div>
              <div class="service-item">Post-Partum Depression / Anxiety</div>
              <div class="service-item">PTSD</div>
              <div class="service-item">Sexual Disorder</div>
              <div class="service-item">Depressive Disorder</div>
              <div class="service-item">Anxiety Disorder</div>
              <div class="service-item">Stress Management</div>
              <div class="service-item">Therapy for Teens & Children</div>
            </div>
            
            <p>Young hearts often carry unspoken burdens, navigating a world that feels overwhelming. At Nirvana Counseling, we offer a safe space for teens and children, helping them manage stress, relationships, and emotional struggles. For teens, therapy fosters self-awareness and resilience. For children, we blend creativity and play, making healing both effective and enjoyable.</p>

            <h2 class="service_title">The Nirvana Commitment</h2>
            <p>Choosing Nirvana Counseling is more than seeking therapy—it’s stepping into a space where your story is honored, your struggles are met with kindness, and your growth is nurtured with care. Nirvana weave expertise with deep compassion, creating a refuge where you are truly seen and heard. Whether you walk this path for yourself, your teen, or your child, we walk beside you—illuminating the way toward healing, resilience, and transformation. One step, one breath, one breakthrough at a time.</p>

            <h2 class="service_title">Book Your Free Meet-and-Greet Today</h2>
            <p>Taking the first step toward therapy can feel daunting, but you don’t have to face it alone. At Nirvana Counselling, we offer a free meet-and-greet session to help you explore whether our services are the right fit for you or your loved one. During this session, we’ll discuss your needs, answer your questions, and explain how we can work together to achieve your goals.</p>
            <p>Begin your journey to healing, growth, and clarity today. Reach out to Nirvana Counselling and take the first step toward becoming the best version of yourself.</p>                
    </div>
</section>
@stop