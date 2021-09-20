@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.project') }}"><button class="btn btn-info">Add Project</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Projects</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Image</th>
                                <th scope="col" class="text-center" width="10%">Title</th>
                                <th scope="col" class="text-center" width="25%">Description</th>
                                <th scope="col" class="text-center" width="5%">Link</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($project->image) }}" alt="" width="80px" height="80px"></td>
                                    <td class="text-center">{{$project->title}}</td>
                                    <td class="text-center">{{$project->description}}</td>
                                    <td class="text-center">{{$project->link}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('project/edit/'.$project->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('project/delete/'.$project->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
