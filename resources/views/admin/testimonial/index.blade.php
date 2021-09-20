@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Testimonial</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Name</th>
                                <th scope="col" class="text-center" width="10%">Designation</th>
                                <th scope="col" class="text-center" width="10%">Image</th>
                                <th scope="col" class="text-center" width="25%">Messages</th>
                                <th scope="col" class="text-center" width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td class="text-center">{{$testimonial->name}}</td>
                                    <td class="text-center">{{$testimonial->designation}}</td>
                                    <td class="text-center"><img src="{{ asset($testimonial->image) }}" alt="" width="80px" height="80px"></td>
                                    <td class="text-center">{{$testimonial->message}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('testimonial/delete/'.$testimonial->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $testimonials->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
