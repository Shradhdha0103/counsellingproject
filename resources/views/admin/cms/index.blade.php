@extends('layouts.admin_main')
@section('content')
<style>
   #menuToggle .fa-tasks:before {
    position: relative;
    content: "\f0ae";
    top: 13px;
}
.desc {
  width: 300px; /* container ki width set karein */
  height: 3.2em; /* 2 lines ke liye height set karein */
  overflow: hidden; /* extra content ko hide karein */
  text-overflow: ellipsis; /* agar text truncate ho raha ho toh '...' dikhayein */
  line-height: 1.6em; /* line-height set karein, taake 2 lines mein content aaye */
  display: -webkit-box;
  -webkit-line-clamp: 2; /* yeh 2 lines tak limit karega */
  -webkit-box-orient: vertical; /* box ko vertical banayein */
}
</style>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>CMS List</strong>
                        <strong><a class="text-end text-green" href="{{ route('storecms') }}">Add CMS</a></strong>
                    </div>
                    
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cms as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td><img src="{{ asset('storage/app/private/public/services/' . $data->image) }}" alt="Service Image" width="50%" height="50%"></td> --}}
                                    <td>{{$data->title}}</td>
                                    {{-- <td class="desc">{!! $data->desc !!}</td> --}}
                                    <td>
                                        @if ($data->status == 1)
                                        <span class="badge badge-success">Active</span>
                                       @else
                                           <span class="badge badge-danger">Deactive</span>
                                       @endif
                                      
                                    </td>
                                    <td class="d-flex text-center"> 
                                        <div class="ml-2"><a  href="{{route('edit-cms',['id'=>encrypt($data->id)])}}" class="btn btn-primary edit-cms p3">
                                            Edit 
                                        </a></div>
                                      
                                         <div class="ml-2"><a data-id="{{ encrypt($data->id) }}" type="button" class="btn btn-primary delete-cms p3" id="deleteCMS">
                                            Delete
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
        $(document).on('click', '#deleteCMS', function(e) {
            e.preventDefault(); // Prevent the default link behavior

            var cmsId = $(this).data('id'); // Get the data-id (the encrypted blog ID)

            // Show SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this Record?",
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
                        url: '{{ route('delete-cms', ':id') }}', // Your route to delete the blog
                        type: 'DELETE',
                        data: {
                            id: cmsId,
                            _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                        },
                        success: function(response) {
                            // Success response, show success message
                            Swal.fire(
                                'Deleted!',
                                'Your record has been deleted.',
                                'success'
                            );
                            
                            // Optionally, you can remove the blog from the DOM
                            // $(this).closest('.blog-row').remove(); // Adjust according to your structure
                        },
                        error: function(xhr, status, error) {
                            // Error handling, show an error message
                            Swal.fire(
                                'Error!',
                                'There was an issue deleting the CMS record.',
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