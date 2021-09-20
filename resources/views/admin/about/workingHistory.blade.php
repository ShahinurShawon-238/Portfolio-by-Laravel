@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.working.history') }}"><button class="btn btn-info">Add Working History</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Working History</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Image</th>
                                <th scope="col" class="text-center" width="10%">Organization Name</th>
                                <th scope="col" class="text-center" width="10%">Designation</th>
                                <th scope="col" class="text-center" width="5%">From</th>
                                <th scope="col" class="text-center" width="5%">To</th>
                                <th scope="col" class="text-center" width="8%">Contact</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($workings as $row)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($row->image) }}" alt="" width="80px" height="80px"></td>
                                    <td class="text-center">{{$row->name}}</td>
                                    <td class="text-center">{{$row->designation}}</td>
                                    <td class="text-center">{{$row->from}}</td>
                                    <td class="text-center">{{$row->to}}</td>
                                    <td class="text-center">{{$row->contact}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('working/history/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('working/history/delete/'.$row->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $workings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
