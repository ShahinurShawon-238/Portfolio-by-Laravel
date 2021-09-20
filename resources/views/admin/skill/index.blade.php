@extends('admin.admin_master')
@section('admin')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('add.skill') }}"><button class="btn btn-info">Add Skill</button></a>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header"> All Skills</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" >Skill Name</th>
                                <th scope="col" class="text-center" >Skill Percents</th>
                                <th scope="col" class="text-center" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            <tr>
                                <td class="text-center">{{$skill->name}}</td>
                                <td class="text-center">{{$skill->percentage}}</td>
                                <td class="text-center">
                                    <a href="{{ url('skill/edit/'.$skill->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('skill/delete/'.$skill->id) }}"
                                        onclick="return confirm('Are you sure to delete?')"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $skills->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
