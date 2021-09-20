@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.about.portfolio') }}"><button class="btn btn-info">Add About Portfolio</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All About Portfolio<span class="text-warning float-right">(Delete the previous data)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="15%">Portfolio Title</th>
                                <th scope="col" class="text-center" width="15%">Your Name</th>
                                <th scope="col" class="text-center" width="15%">Your Designation</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($portfolios2 as $portfolio)
                                <tr>
                                    <td class="text-center">{{ $portfolio->title }}</td>
                                    <td class="text-center">{{ $portfolio->name }}</td>
                                    <td class="text-center">{{ $portfolio->designation }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('portfolio/edit/'.$portfolio->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('portfolio/delete/'.$portfolio->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $portfolios2->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
