@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.social.media') }}"><button class="btn btn-info">Add Social Media Link</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Social Media<span class="text-warning float-right">(Delete the previous data)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="12%">Facebook</th>
                                <th scope="col" class="text-center" width="12%">Twitter</th>
                                <th scope="col" class="text-center" width="12%">LinkedIn</th>
                                <th scope="col" class="text-center" width="12%">Github</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($socialMedia as $row)
                                <tr>
                                    <td class="text-center">{{ $row->facebook }}</td>
                                    <td class="text-center">{{ $row->twitter }}</td>
                                    <td class="text-center">{{ $row->linkedin}}</td>
                                    <td class="text-center">{{ $row->github}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('social/media/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('social/media/delete/'.$row->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $socialMedia->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
