@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Contact Profile</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('contact/update/'.$contact->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="contactAddress">Update Contact Address</label>
                    <input type="text" class="form-control" id="contactAddress" value="{{ $contact->address }}"
                        name="contactAddress">
                </div>
                <div class="form-group">
                    <label for="contactPhone">Update Contact Phone</label>
                    <input type="text" class="form-control" id="contactPhone" value="{{ $contact->phone }}"
                        name="contactPhone">
                </div>
                <div class="form-group">
                    <label for="contactEmail">Update Contact Email</label>
                    <input type="text" class="form-control" id="contactEmail" value="{{ $contact->email }}"
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
