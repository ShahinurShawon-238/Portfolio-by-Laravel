@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Project</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.project') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Project Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Project Image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="title">Project Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Project Title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Project Description</label>
                    <textarea class="form-control" name="description" id="description" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Project Link</label>
                    <input type="text" class="form-control" id="link" placeholder="Enter Project Link" name="link" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
