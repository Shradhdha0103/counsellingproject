@extends('layouts.admin_main')
@section('content')

{{-- <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Setting</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Setting</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Update Setting's Details</h4>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success text-center"><span class="success-msg">{{ session('success') }}</span></div>
        @endif
        <div class="card-body">
            <div class="custom-tab">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Service</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Footer</a>
                    </div>
                </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    {{-- <div style="text-align: end;"><button type="submit" class="btn btn-lg btn-info">Update</button></div> --}}
                    <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        <div class="col-lg-12">
                            {{-- <div class="card"> --}}
                                {{-- <div class="card-header"><strong>Update Home Page</strong><small> Information</small></div> --}}
                                <div class="card-body card-block">     
                                    
                                    <form action="{{ route('updateSettings', $setting->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="col-md-12 form-group"><label for="title" class=" form-control-label">Title</label>
                                        <input type="text" id="footer_content" name="title" value="{{ old('title', $setting->title) }}" class="form-control">
                                    </div>
                        
                                    <div class="col-md-12 form-group"><label for="sub_title" class=" form-control-label">Sub Title</label>
                                        {{-- <textarea id="footer_content" class="form-control" name="sub_title" style="width:100%;">        
                                            {{ old('sub_title', $setting->sub_title) }}                                    
                                        </textarea> --}}
                                        <input type="text" id="sub_title" name="sub_title" value="{{ old('sub_title', $setting->sub_title) }}"  class="form-control">
                                    </div>

                                    <div class="col-md-12 form-group"><label for="readmore_content" class=" form-control-label">Readmore Content</label>
                                        <input type="text" id="readmore_content" name="readmore_content" value="{{ old('readmore_content', $setting->readmore_content) }}"  class="form-control">
                                    </div>
                        
                                    <div class="col-md-6">  
                                        <div class="form-group"><label for="contact_link" class=" form-control-label">Banner Contact Us Link</label>
                                         <input type="text" id="contact_link" name="contact_link" value="{{ old('contact_link', $setting->contact_link) }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="banner_video_link" class=" form-control-label">Banner Video Link</label>
                                            <input type="text" id="banner_video_link" value="{{ old('banner_video_link', $setting->banner_video_link) }}" class="form-control">
                                        </div>
                                    </div>    

                                    <div class="col-md-4 form-group"><label for="banner_title1" class=" form-control-label">Banner Title1</label>
                                        <input type="text" id="banner_title1" name="banner_title1" value="{{ old('banner_title1', $setting->banner_title1) }}" class="form-control">
                                    </div>
                                    <div class="col-md-4 form-group"><label for="banner_title2" class=" form-control-label">Banner Title2</label>
                                        <input type="text" id="banner_title2" name="banner_title2" value="{{ old('banner_title2', $setting->banner_title2) }}" class="form-control">
                                    </div>
                                    <div class="col-md-4 form-group"><label for="banner_title3" class=" form-control-label">Banner Title3</label>
                                        <input type="text" id="banner_title3" name="banner_title3" value="{{ old('banner_title3', $setting->banner_title3) }}" class="form-control">
                                    </div>
                                      
                                    <div class="col-md-12 form-group"><label for="banner_content1" class=" form-control-label">Banner Content1</label>
                                        <input type="text" id="banner_content1" name="banner_content1" value="{{ old('banner_content1', $setting->banner_content1) }}" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group"><label for="banner_content2" class=" form-control-label">Banner Content2</label>
                                        <input type="text" id="banner_content2" name="banner_content2" value="{{ old('banner_content2', $setting->banner_content2) }}" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group"><label for="banner_content3" class=" form-control-label">Banner Content3</label>
                                        <input type="text" id="banner_content3" name="banner_content3" value="{{ old('banner_content3', $setting->banner_content3) }}" class="form-control">
                                    </div>
                        
                                    <div class="col-md-6">  
                                        <div class="form-group"><label for="banner_img" class=" form-control-label">Banner Image</label>
                                            <input type="file" id="banner_img" name="banner_img" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="logo" class=" form-control-label">LOGO</label>
                                            <input type="file" id="logo" name="logo" class="form-control-file">
                                        </div>
                                    </div> 
                                    
                                    <button type="submit" class="btn btn-lg btn-info btn-block">Update</button>
                                    
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                        <div class="col-lg-12">
                            {{-- <div class="card"> --}}
                                {{-- <div class="card-header"><strong>Update Service</strong><small> Information</small></div> --}}
                               
                                <div class="card-body card-block">
                                    <div class="col-md-12">  
                                        <div class="form-group"><label for="work_title" class=" form-control-label">Work Title</label>
                                         <input type="text" id="work_title" value="{{ old('work_title', $setting->work_title) }}" name="work_title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">  
                                        <div class="form-group"><label for="getin_touch_title" class=" form-control-label">Get in Touch Title</label>
                                         <input type="text" id="getin_touch_title" name="getin_touch_title" value="{{ old('getin_touch_title', $setting->getin_touch_title) }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="first_session_title" class=" form-control-label">First Session Title</label>
                                            <input type="text" id="first_session_title" name="first_session_title" value="{{ old('first_session_title', $setting->first_session_title) }}" class="form-control">
                                        </div>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="beginyour_path_title" class=" form-control-label">Begin Your Path</label>
                                            <input type="text" id="beginyour_path_title" name="beginyour_path_title" value="{{ old('beginyour_path_title', $setting->beginyour_path_title) }}" class="form-control">
                                        </div>
                                    </div>         
                                    
                                    <div class="col-md-12 form-group"><label for="getin_touch_content" class=" form-control-label">Get in Touch Content</label>
                                        <input type="text" id="getin_touch_content" name="getin_touch_content" value="{{ old('getin_touch_content', $setting->getin_touch_content) }}" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group"><label for="first_session_content" class=" form-control-label">First Session Content</label>
                                        <input type="text" id="first_session_content" name="first_session_content" value="{{ old('first_session_content', $setting->first_session_content) }}" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group"><label for="beginyour_path_content" class=" form-control-label">Beginyour Path Content</label>
                                        <input type="text" id="beginyour_path_content" name="beginyour_path_content" value="{{ old('beginyour_path_content', $setting->beginyour_path_content) }}" class="form-control">
                                    </div>
                        
                                    <div class="col-md-6">  
                                        <div class="form-group"><label for="therapy_heading" class=" form-control-label">Therapy Heading</label>
                                         <input type="text" id="therapy_heading" name="therapy_heading" value="{{ old('therapy_heading', $setting->therapy_heading) }}" class="form-control">
                                        </div>
                                    </div>   
                                    <div class="col-md-6">  
                                        <div class="form-group"><label for="therapy_title" class=" form-control-label">Therapy Title</label>
                                         <input type="text" id="therapy_title" name="therapy_title" value="{{ old('therapy_title', $setting->therapy_title) }}" class="form-control">
                                        </div>
                                    </div>   
                                   
                                    <div class="col-md-12 form-group"><label for="therapy_content" class=" form-control-label">Therapy Content</label>
                                        <input type="text" id="therapy_content" name="therapy_content" value="{{ old('therapy_content', $setting->therapy_content) }}" class="form-control">
                                    </div>
                                     
                                    <button type="submit" class="btn btn-lg btn-info btn-block">Update</button>
                                    
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                        <div class="col-lg-12">
                            {{-- <div class="card"> --}}
                                {{-- <div class="card-header"><strong>Update Footer</strong><small> Information</small></div> --}}
                                <div class="card-body card-block">
                                    <div class="col-md-6">  
                                        <div class="form-group"><label for="phone" class=" form-control-label">Phone</label>
                                         <input type="text" id="phone" name="phone" value="{{ old('phone', $setting->phone) }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="email" class=" form-control-label">Email</label>
                                            <input type="email" id="email" name="email" value="{{ old('email', $setting->email) }}" class="form-control">
                                        </div>
                                    </div>          
                                    
                                    <div class="col-md-12 form-group"><label for="footer_content" class=" form-control-label">Footer Content</label>
                                        <input type="text" id="footer_content" name="footer_content" value="{{ old('footer_content', $setting->footer_content) }}" class="form-control">
                                    </div>
                        
                                    <div class="col-md-4">  
                                        <div class="form-group"><label for="insta_link" class=" form-control-label">Insta Link</label>
                                         <input type="text" id="insta_link" name="insta_link" value="{{ old('insta_link', $setting->insta_link) }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="linkedin_link" class=" form-control-label">Linkedin Link</label>
                                            <input type="text" id="linkedin_link" name="linkedin_link" value="{{ old('linkedin_link', $setting->linkedin_link) }}" class="form-control">
                                        </div>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="website_link" class=" form-control-label">Website Link</label>
                                            <input type="text" id="website_link" name="website_link" value="{{ old('website_link', $setting->website_link) }}" class="form-control">
                                        </div>
                                    </div>    
                                    
                                    <button type="submit" class="btn btn-lg btn-info btn-block">Update</button>
                                </div>
                            {{-- </div> --}}
                        </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop