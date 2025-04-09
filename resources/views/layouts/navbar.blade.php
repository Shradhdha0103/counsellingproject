<?php $setting = setting();
$services = services();
$blogs = blogs();
$menuItems = menuItems();
// dd($menuItems);
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      {{-- <a class="navbar-brand" href="{{route('home')}}">ccc</a> --}}
      <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('storage/app/private/public/logo')}}/{{$setting->logo}}" class="logo" alt="Logo"></a>
      {{-- <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets/logo/blackBG.png')}}" class="logo" alt="Logo"></a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link {{request()->is('/') || request()->is('home') ? 'active' : '' }}">Home</a></li>
          @foreach($menuItems as $item)
          <li class="nav-item">
            <a href="{{ route('displaymenu', ['slug' => $item->slug]) }}"
              class="nav-link {{ request()->routeIs('displaymenu') && request()->route('slug') == $item->slug ? 'active' : '' }}">
              {{ $item->title }}
           </a>
          </li>
      @endforeach
          {{-- <li class="nav-item"><a href="{{route('about')}}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
          <li class="nav-item"><a href="{{route('counselor')}}" class="nav-link {{ request()->routeIs('counselor') ? 'active' : '' }}">Counselor</a></li>
          <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a></li> --}}
          <li class="dropdown">
            <button class="dropdown-toggle {{ request()->routeIs('servicedetails') && in_array(request()->route('slug'), $services->pluck('slug')->toArray()) ? 'active' : '' }}">
              Services <i class="fas fa-caret-down"></i>
          </button>
            <ul class="dropdown-menu">
              @foreach ($services as $item)
        <li class="nav-item">
            <a href="{{ route('servicedetails', ['slug' => $item->slug]) }}"
               class="nav-link {{ request()->routeIs('servicedetails') && request()->route('slug') == $item->slug ? 'active' : '' }}">
                {{ $item->title }}
            </a>
        </li>
    @endforeach
          
                {{-- <li><a href="{{route('individual_therapy')}}" class="nav-link {{ request()->routeIs('individual_therapy') ? 'active' : '' }}">Individual Therapy</a></li>
                <li><a href="{{route('couples_counseling')}}" class="nav-link {{ request()->routeIs('couples_counseling') ? 'active' : '' }}">Couples Counseling</a></li>
                <li><a href="{{route('teenagers')}}" class="nav-link {{ request()->routeIs('teenagers') ? 'active' : '' }}">Teenagers and Young Adults</a></li>
                <li><a href="{{route('adhd_support')}}" class="nav-link {{ request()->routeIs('adhd_support') ? 'active' : '' }}">ADHD Support</a></li>
                <li><a href="{{route('trauma_informed')}}" class="nav-link {{ request()->routeIs('trauma_informed') ? 'active' : '' }}">Trauma-Informed Therapy</a></li>
                <li><a href="{{route('dbt_group')}}" class="nav-link {{ request()->routeIs('dbt_group') ? 'active' : '' }}">DBT group</a></li>
                <li><a href="{{route('multilingual_clients')}}" class="nav-link {{ request()->routeIs('multilingual_clients') ? 'active' : '' }}">Multilingual Clients</a></li> --}}
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('blogs') }}" class="nav-link 
                {{ request()->is('blogs') || 
                (request()->routeIs('blogdetails') && request()->route('slug') == $blogs->firstWhere('slug', request()->route('slug'))->slug) 
                ? 'active' : '' }}">
                Blog
            </a>
        </li>
        
        
        
        
          <li class="nav-item"><a href="{{$setting['contact_link']}}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
          {{-- <li class="nav-item"><a href="{{ url('schedule-a-consultation') }}" class="btn btn-primary m-2 nav-link {{ request()->routeIs('contact') ? 'schedule-a-consultation' : '' }}">Book Consultation</a></li> --}}
          <li class="nav-item">
           <iframe frameborder='0' height='28' scrolling='no' src='https://nirvanacounseling.janeapp.com/embed/book_online' width='177' style="position: relative;
    top: 14px;"></iframe>
          </li>
          
          {{-- <li class="nav-item"><a href="https://nirvanacounseling.janeapp.com/" target="_blanck" class="btn btn-primary m-2 nav-link">Sign In</a></li> --}}
        </ul>
      </div>
    </div>
  </nav>  