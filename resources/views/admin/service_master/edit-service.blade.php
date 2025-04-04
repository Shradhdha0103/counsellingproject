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
        <div class="card-header">
            <h4>Update Services</h4>
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
                                
                                <form action="{{route('edit-service-data')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$updateService->id}}">
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="title" class=" form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" value="{{ $updateService->title }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="sub_title" class=" form-control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" class="form-control" value="{{ $updateService->sub_title }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 form-group"><label for="slug" class=" form-control-label">Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control"  value="{{ $updateService->slug }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12 form-group"><label for="desc" class="form-control-label">Description</label>
                                        {{-- <input type="text" id="desc" name="desc" class="form-control"> --}}
                                        <textarea id="content" name="desc">{{ old('desc', $updateService->desc) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12 form-group"><label for="image" class="form-control-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control">
                                        <img id="image-preview" src="{{ old('image', $updateService->image ? asset('storage/app/private/public/services/' . $updateService->image) : '') }}" 
                                        alt="Image Preview" 
                                        style="width: 100px; height: 100px;">

                                    </div>
                                </div> 
                               
                                <div class="col-md-6 form-group">
                                    <div class="col-md-12 form-group">
                                    <label for="status" class="form-control-label">Status</label>
                                    <select id="mySelectstatus" class="col-md-12 form-control" name="status" data-placeholder="--Select Status--">
                                        <option value="1" {{ $updateService->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $updateService->status == 0 ? 'selected' : '' }}>Deactive</option>
                                    </select>
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
            $('#mySelectstatus').select2();
    })
</script>
<script>
    document.getElementById('image').addEventListener('change', function(event) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        var imgElement = document.getElementById('image-preview');
        imgElement.src = e.target.result;  // Set the src of the image preview to the selected file
        imgElement.style.display = 'block';  // Make the image visible
      };
  
      // Read the file as a data URL
      reader.readAsDataURL(event.target.files[0]);
    });
  </script>
  