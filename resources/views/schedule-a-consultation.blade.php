@extends('layouts.main')
@section('content')
<style>
    .bg-gray{
        background-color: #f3f3f3;
    }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>consultation <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Schedule Your Free 25 Minute Consultation</h1>
        </div>
      </div>
    </div>
  </section>
<div class="bg-gray">
        <div class="col-md-12 half ftco-animate pt-5">            
            <div class="container">
                <h2 class="mb-4 text-center">What to Expect</h2>
                <p class="text-center">During your free 25-minute phone consultation, we'll discuss your current challenges and goals for therapy. It's a chance for you to ask any questions you have and for me to explain how I can support you in your journey toward well-being.</p>
            <form action="#" class="appointment">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
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
                            <input type="text" class="form-control" placeholder="Preferred Date and Time">
                            <p>i.e. February 14th, 2025 at 2:45pm</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Anything else you would like to share"></textarea>
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop