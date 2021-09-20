@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.about.me') }}"><button class="btn btn-info">Add About Me</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header">About Me<span class="text-warning float-right">(Before adding new information, Please delete the previous one)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="15%">Image</th>
                                <th scope="col" class="text-center" width="35%">Description</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($aboutMe as $row)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($row->image) }}" alt="" width="100px" height="100px"></td>
                                    <td class="text-center">{{$row->description}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('about/me/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('about/me/delete/'.$row->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $aboutMe->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
