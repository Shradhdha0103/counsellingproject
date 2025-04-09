@extends('layouts.admin_main')
@section('content')
<style>
    #menuToggle .fa-tasks:before {
     position: relative;
     content: "\f0ae";
     top: 13px;
 }
 </style>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>All Blogs</strong>
                        <strong><a class="text-end text-green btn btn-primary" href="{{ route('addblog') }}">Add Blog</a></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Author Name</th>
                                    <th>SEO Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->users->name}}</td>
                                    <td>{{$data->SEO_title}}</td>
                                    <td>
                                        @if ($data->status == 1)
                                        <span class="badge badge-success">Active</span>
                                       @else
                                           <span class="badge badge-danger">Deactive</span>
                                       @endif
                                       {{-- {{$blog->status}} --}}
                                    </td>
                                    <td class="d-flex text-center"> 
                                        <div class="ml-2"><a  href="{{route('edit-blog',['id'=>encrypt($data->id)])}}" class="btn btn-primary edit-blog p3">
                                            Edit 
                                        </a></div>
                    
                                        {{-- <div class="ml-2"><a href="{{route('delete-blog',['id'=>encrypt($blog->id)])}}" class="btn btn-primary delete-blog p3">
                                            Delete 
                                            //<i class="mdi mdi-delete d-block" class="text-center"></i>
                                         </a></div> --}}
                                         <div class="ml-2"><a data-id="{{ encrypt($data->id) }}" type="button" class="btn btn-primary delete-blog p3" id="deleteBlog">
                                            Delete{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
                                        </a></div>
                                    </td>
                                </tr>                                        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@stop
<!-- Include jQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Attach click event to the delete button
        $(document).on('click', '#deleteBlog', function(e) {
            e.preventDefault(); // Prevent the default link behavior

            var blogId = $(this).data('id'); // Get the data-id (the encrypted blog ID)

            // Show SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this Blog?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb65c',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User confirmed deletion, make AJAX request to delete the blog
                    $.ajax({
                        url: '{{ route('delete-blog', ':id') }}', // Your route to delete the blog
                        type: 'DELETE',
                        data: {
                            id: blogId,
                            _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                        },
                        success: function(response) {
                            // Success response, show success message
                            Swal.fire(
                                'Deleted!',
                                'Your blog has been deleted.',
                                'success'
                            );
                            
                            // Optionally, you can remove the blog from the DOM
                            // $(this).closest('.blog-row').remove(); // Adjust according to your structure
                        },
                        error: function(xhr, status, error) {
                            // Error handling, show an error message
                            Swal.fire(
                                'Error!',
                                'There was an issue deleting the blog.',
                                'error'
                            );
                        }
                    });
                    location.reload(); 
                }
            });
        });
    });
</script>