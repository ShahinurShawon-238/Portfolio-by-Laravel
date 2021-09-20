@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update About Portfolio</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('portfolio/update/'.$portfolios2->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Update Portfolio Title</label>
                    <input type="text" class="form-control" id="title" value="{{$portfolios2->title}}" name="title">
                </div>
                <div class="form-group">
                    <label for="name">Update Your Name</label>
                    <input type="text" class="form-control" id="name" value="{{$portfolios2->name}}" name="name">
                </div>
                <div class="form-group">
                    <label for="designation">Update Your Designation</label>
                    <input type="text" class="form-control" id="designation" value="{{$portfolios2->designation}}" name="designation">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
