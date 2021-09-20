@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Working History</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.working.history') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Organization Image or Logo</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Organization Image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="name">Organization Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Organization Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="designation">Your Designation</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter Your Designation" name="designation" required>
                </div>
                <div class="form-group">
                    <label for="from">Starting Date</label>
                    <input type="text" class="form-control" id="from" placeholder="Enter Your Job Starting Date" name="from" required>
                </div>
                <div class="form-group">
                    <label for="to">Ending Date</label>
                    <input type="text" class="form-control" id="to" placeholder="Enter Your Job Ending Date" name="to" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter Contact Information Of Your Organization" name="contact" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection