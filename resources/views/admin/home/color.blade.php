@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.home.color') }}"><button class="btn btn-info">Add Home Color</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Home Color<span class="text-warning float-right">(Delete the previous data)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="15%">Top side Color</th>
                                <th scope="col" class="text-center" width="15%">Bottom side Color</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colors as $row)
                                <tr>
                                    <td class="text-center">{{ $row->top }}</td>
                                    <td class="text-center">{{ $row->bottom }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('color/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $colors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
