@extends('layouts.admin_main')
@section('content')
<style>
    #menuToggle .fa-tasks:before {
     position: relative;
     content: "\f0ae";
     top: 13px;
 }
 </style>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex">
            <a href="{{route('seo_details')}}" class="pr-3"><img src="{{asset('assets/images/backArrow.svg')}}"></a>
            <h4>Add SEO</h4>
        </div>
        <div class="card-body">
            <div class="custom-tab">
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                {{-- <div style="text-align: end;"><button type="submit" class="btn btn-lg btn-info">Update</button></div> --}}
                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                    <div class="col-lg-12">
                        {{-- <div class="card"> --}}
                            {{-- <div class="card-header"><strong>Update Home Page</strong><small> Information</small></div> --}}
                            <div class="card-body card-block">     
                                
                                <form action="{{route('add_seo')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="page_name" class=" form-control-label">Page Name</label>
                                        <input type="text" id="page_name" name="page_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="title" class=" form-control-label">Meta Title</label>
                                        <input type="text" id="title" name="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12 form-group"><label for="description" class="form-control-label">Meta Description</label>
                                        <textarea id="content" name="description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12 form-group"><label for="key_word" class=" form-control-label">Meta Keyword</label>
                                        {{-- <input type="text" id="key_word" name="key_word" class="form-control"> --}}
                                        <textarea id="content_key_word" name="key_word" required></textarea>
                                    </div>
                                </div> 
                                
                                <button type="submit" class="btn btn-lg btn-info btn-block">Update</button>
                                </form>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- Include jQuery (required for Summernote) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#content').summernote({
            placeholder: 'Enter your content here...', // Placeholder text
            tabsize: 2, // Number of spaces when tab is pressed
            height: 200, // Set the editor height
            toolbar: [
                // Customize toolbar options (buttons)
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });

    $(document).ready(function() {
    $('#content_key_word').summernote({
            placeholder: 'Enter your content here...', // Placeholder text
            tabsize: 2, // Number of spaces when tab is pressed
            height: 200, // Set the editor height
            toolbar: [
                // Customize toolbar options (buttons)
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
   
    });
</script>
