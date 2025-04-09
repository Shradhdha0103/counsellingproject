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
                        <strong>SEO Details</strong>
                        <strong><a class="text-end text-green btn btn-primary" href="{{ route('add-seo') }}">Add SEO Page Detail</a></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Page Name</th>
                                    <th>Title Name</th>
                                    <th>Description</th>
                                    <th>Key word</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seoList as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->page_name}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->key_word}}</td>
                                   
                                    <td class="d-flex text-center"> 
                                        <div class="ml-2"><a  href="{{route('edit-seo',['id'=>encrypt($data->id)])}}" class="btn btn-primary edit-seo p3">
                                            Edit 
                                        </a></div>
                                         <div class="ml-2"><a data-id="{{ encrypt($data->id) }}" type="button" class="btn btn-primary delete-seo p3" id="deleteseo">
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
        $(document).on('click', '#deleteseo', function(e) {
            e.preventDefault(); // Prevent the default link behavior

            var seoId = $(this).data('id'); 

            // Show SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this details?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5cb65c',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                  
                    $.ajax({
                        url: '{{ route('delete-seo', ':id') }}', 
                        type: 'DELETE',
                        data: {
                            id: seoId,
                            _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                        },
                        success: function(response) {
                            // Success response, show success message
                            Swal.fire(
                                'Deleted!',
                                'Your details has been deleted.',
                                'success'
                            );
                        },
                        error: function(xhr, status, error) {
                            // Error handling, show an error message
                            Swal.fire(
                                'Error!',
                                'There was an issue deleting the details.',
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