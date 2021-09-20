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
                        <div class="card-header"> All Contact Messages</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Name</th>
                                <th scope="col" class="text-center" width="10%">Email</th>
                                <th scope="col" class="text-center" width="25%">Messages</th>
                                <th scope="col" class="text-center" width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contactForm as $contact)
                                <tr>
                                    <td class="text-center">{{$contact->name}}</td>
                                    <td class="text-center">{{$contact->email}}</td>
                                    <td class="text-center">{{$contact->message}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('contact/message/delete/'.$contact->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$contactForm->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
