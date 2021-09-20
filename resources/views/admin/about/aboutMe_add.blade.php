@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create About Information</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.about.me') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Your Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Your Image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="description">Your Description</label>
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
