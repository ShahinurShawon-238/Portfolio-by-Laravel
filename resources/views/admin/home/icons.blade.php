@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.icon') }}"><button class="btn btn-info">Add Icon</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Icons<span class="text-warning float-right">(Update Icon One By One. Never Delete All Data)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="15%">Logo</th>
                                <th scope="col" class="text-center" width="15%">Shortcut Icon</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($icons as $icon)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($icon->logo) }}" alt="" width="100px" height="80px"></td>
                                    <td class="text-center"><img src="{{ asset($icon->shortCut) }}" alt="" width="100px" height="80px"></td>
                                    <td class="text-center">
                                        <a href="{{ url('icon/edit/'.$icon->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $icons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
