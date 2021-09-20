@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a>
                    
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Contact <span class="text-warning float-right">(Delete the previous contact)</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">Contact Address</th>
                                <th scope="col" class="text-center">Contact Phone</th>
                                <th scope="col" class="text-center">Contact Email</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contacts)
                                <tr>
                                    <td class="text-center">{{$contacts->address}}</td>
                                    <td class="text-center">{{$contacts->phone}}</td>
                                    <td class="text-center">{{$contacts->email}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('contact/edit/'.$contacts->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('contact/delete/'.$contacts->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
