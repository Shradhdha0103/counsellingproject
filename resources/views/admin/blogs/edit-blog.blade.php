@extends('layouts.admin_main')
<style>
    #menuToggle .fa-tasks:before {
     position: relative;
     content: "\f0ae";
     top: 13px;
 }
 </style>
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Update Blogs</h4>
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
                                
                                <form action="{{route('edit-blog-data')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$updateBlog->id}}">
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="title" class=" form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" value="{{ $updateBlog->title }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="sub_title" class=" form-control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" class="form-control" value="{{ $updateBlog->sub_title }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="slug" class=" form-control-label">Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control"  value="{{ $updateBlog->slug }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12 form-group"><label for="desc" class="form-control-label">Description</label>
                                        {{-- <input type="text" id="desc" name="desc" class="form-control"> --}}
                                        <textarea id="content" name="desc">{{ old('desc', $updateBlog->desc) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="select" class=" form-control-label">Select</label>    
                                        <select id="mySelectuser" class="form-control" name="auth_id" data-placeholder="Select User">
                                            @forelse ($auth_id as $item)
                                            <option value="{{ $item->id }}" {{ $updateBlog->auth_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @empty
                                            <option value="">No Users available</option>
                                        @endforelse
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="feature_img" class="form-control-label">Feature Image</label>
                                        <input type="file" id="feature_img" name="feature_img" class="form-control">{{ $updateBlog->feature_img }}
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="SEO_title" class=" form-control-label">SEO Title</label>
                                        <input type="text" id="SEO_title" name="SEO_title" class="form-control" value="{{ $updateBlog->SEO_title }}">
                                    </div>
                                </div> 
                              
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="meta_desc" class=" form-control-label">Meta Desc</label>
                                        <input type="text" id="meta_desc" name="meta_desc" class="form-control" value="{{ $updateBlog->meta_desc }}">
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="meta_keyword" class=" form-control-label">Meta Keyword</label>
                                        <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" value="{{ $updateBlog->meta_keyword }}">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="blog_faq" class=" form-control-label">Blog Faq</label>
                                        <input type="text" id="blog_faq" name="blog_faq" class="form-control" value="{{ $updateBlog->blog_faq }}">
                                    </div>
                                </div> 
                                {{-- <div class="col-md-6">
                                    <div class="form-group"><label for="status" class=" form-control-label">Status</label>
                                        <input type="text" id="status" name="status" class="form-control">
                                    </div>
                                </div>  --}}
                                <div class="col-md-6 form-group">
                                    <div class="col-md-12 form-group">
                                    <label for="status" class="form-control-label">Status</label>
                                    <select id="mySelectstatus" class="col-md-12 form-control" name="status" data-placeholder="--Select Status--">
                                        <option value="1" {{ $updateBlog->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $updateBlog->status == 0 ? 'selected' : '' }}>Deactive</option>
                                    </select>
                                    </div>
                                    {{-- <input type="text" class="form-control" id="status" name="status"> --}}
                                    {{-- <label class="error text-danger">{{$errors->first('SEO_title')}}</label> --}}
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
            $('#mySelectstatus').select2();
    })
</script>
