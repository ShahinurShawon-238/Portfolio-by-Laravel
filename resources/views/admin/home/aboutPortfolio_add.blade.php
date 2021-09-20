@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create About Portfolio</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.about.portfolio') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Portfolio Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Portfolio Title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="designation">Your Designation</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter Your Designation" name="designation" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
