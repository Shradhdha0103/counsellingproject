@extends('layouts.main')
@section('content')
<style>

.card-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
    animation: fadeInUp 1.5s ease-out;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 250px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.card-icon {
    font-size: 3rem;
    margin-bottom: 15px;
    color: #3498db;
}

.card h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 10px;
}

.card p {
    font-size: 1rem;
    color: #555;
}


</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Teenagers and Young Adults<i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Teenagers and Young Adults</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
            <h2 class="service_title">Guidance for Teenagers and Young Adults at Nirvana Counseling</h2>
            <p>Life as a teenager or young adult can feel like riding a rollercoaster—full of highs, lows, and unexpected twists. At Nirvana Counseling, we get it. The journey of growing up comes with pressure, self-discovery, and the constant search for balance. Whether you’re dealing with stress, relationships, or figuring out your next steps, we’re here to guide you through it.</p>

            <h2 class="service_title">What You Might Be Facing</h2>
             <p>The teenage and young adult years are full of unique challenges as you try to juggle school, friendships, family, and your own personal growth. You may be experiencing:</p>
              <section class="card-section">
                  <div class="card">
                      <div class="card-icon">📚</div>
                      <h3>Academic Overload</h3>
                      <p>Struggling to keep up with schoolwork, deadlines, or managing stress.</p>
                  </div>
                  <div class="card">
                      <div class="card-icon">🤝</div>
                      <h3>Social Uncertainties</h3>
                      <p>Navigating friendships, family expectations, or your place in the world.</p>
                  </div>
                  <div class="card">
                      <div class="card-icon">💭</div>
                      <h3>Identity Crisis</h3>
                      <p>Figuring out who you are, what you want, and how to handle the changing world around you.</p>
                  </div>
                  <div class="card">
                      <div class="card-icon">😰</div>
                      <h3>Anxiety and Stress</h3>
                      <p>Worrying about the future, life choices, or just trying to stay grounded in an ever-changing world.</p>
                  </div>
                  <div class="card">
                      <div class="card-icon">🎢</div>
                      <h3>Emotional Rollercoaster</h3>
                      <p>Feeling intense emotions or reacting impulsively in high-pressure situations.</p>
                  </div>
              </section>
      
                  <h2 class="service_title">How Nirvana Counseling Can Help</h2>
                  <p>At Nirvana Counseling, we’re here to help you make sense of all the chaos. We offer a safe, supportive space where you can explore your thoughts, build emotional resilience, and gain the tools to tackle life’s challenges. Together, we’ll help you find clarity, develop healthy coping strategies, and create a clear vision for the future.</p>
                  <p>No matter what you’re facing, you don’t have to go through it alone. Nirvana Counseling is here to help you navigate this exciting, challenging time with confidence, strength, and a sense of purpose.</p>
      
    </div>
</section>
@stop