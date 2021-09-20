@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Project</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('project/update/'.$project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldImage" value="{{$project->image}}">
                <div class="form-group">
                    <label for="image">Update Project Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Project Image" name="image">
                </div>
                <div class="form-group">
                    <label for="title">Update Project Title</label>
                    <input type="text" class="form-control" id="title" value="{{ $project->title }}" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Update Project Description</label>
                    <textarea class="form-control" name="description" id="description"
                        rows="2">{{ $project->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Update Project Link</label>
                    <input type="text" class="form-control" id="link" value="{{ $project->link }}" name="link">
                </div>
                <div class="form-group">
                    Previous image:
                    <img src="{{asset($project->image)}}" alt="{{$project->title}}" width="100px"
                        height="100px"><br>
                    Image address: {{$project->image}}
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
