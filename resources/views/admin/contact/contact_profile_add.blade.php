@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Contact Profile</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.contact')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="contactAddress">Contact Address</label>
                    <input type="text" class="form-control" id="contactAddress" placeholder="Enter Contact Address"
                        name="contactAddress">
                </div>
                <div class="form-group">
                    <label for="contactPhone">Contact Phone</label>
                    <input type="text" class="form-control" id="contactPhone" placeholder="Enter Contact Phone"
                        name="contactPhone">
                </div>
                <div class="form-group">
                    <label for="contactEmail">Contact Email</label>
                    <input type="text" class="form-control" id="contactEmail" placeholder="Enter Contact Email"
                        name="contactEmail">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
