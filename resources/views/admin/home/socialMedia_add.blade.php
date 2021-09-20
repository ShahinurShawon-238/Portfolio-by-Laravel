@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Social Account</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.social.media') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" placeholder="Enter Facebook Account Link" name="facebook" required>
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" placeholder="Enter Twitter Account Link" name="twitter" required>
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" placeholder="Enter LinkedIn Account Link" name="linkedin" required>
                </div>
                <div class="form-group">
                    <label for="github">Github</label>
                    <input type="text" class="form-control" id="github" placeholder="Enter Github Account Link" name="github" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
