@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.service') }}"><button class="btn btn-info">Add Service</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Services</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Icon</th>
                                <th scope="col" class="text-center" width="10%">Name</th>
                                <th scope="col" class="text-center" width="25%">Description</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($service->image) }}" alt="" width="80px" height="80px"></td>
                                    <td class="text-center">{{$service->name}}</td>
                                    <td class="text-center">{{$service->description}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('service/edit/'.$service->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('service/delete/'.$service->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
