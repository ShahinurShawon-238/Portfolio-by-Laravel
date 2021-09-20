@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Service</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.service') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Service Icon</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Service Icon" name="image" required>
                </div>
                <div class="form-group">
                    <label for="name">Service Title</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Service Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Service Description</label>
                    <textarea class="form-control" name="description" id="description" rows="2" required></textarea>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
