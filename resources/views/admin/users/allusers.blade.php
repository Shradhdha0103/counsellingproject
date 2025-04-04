@extends('layouts.admin_main')

{{-- <link rel="stylesheet" href="{{asset('admin_assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}"> --}}
@section('content')
{{-- <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>All Users</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">All Users</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Users</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
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
{{-- <script src="{{asset('admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_assets/js/init-scripts/data-table/datatables-init.js')}}"></script> --}}