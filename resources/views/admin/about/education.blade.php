@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('add.education') }}"><button class="btn btn-info">Add Education Info</button></a>
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Educational Information</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" width="10%">Institute Image</th>
                                <th scope="col" class="text-center" width="10%">Institute Name</th>
                                <th scope="col" class="text-center" width="10%">Field Of Education</th>
                                <th scope="col" class="text-center" width="5%">GPA</th>
                                <th scope="col" class="text-center" width="5%">In Scale Of</th>
                                <th scope="col" class="text-center" width="8%">Passing year</th>
                                <th scope="col" class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($education as $row)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($row->image) }}" alt="" width="80px" height="80px"></td>
                                    <td class="text-center">{{$row->name}}</td>
                                    <td class="text-center">{{$row->fieldOfEducation}}</td>
                                    <td class="text-center">{{$row->gpa}}</td>
                                    <td class="text-center">{{$row->inScaleOf}}</td>
                                    <td class="text-center">{{$row->year}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('education/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('education/delete/'.$row->id) }}"
                                           onclick="return confirm('Are you sure to delete?')"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $education->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
