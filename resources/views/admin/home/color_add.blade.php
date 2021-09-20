@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Home Color</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.home.color') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="top">Top Color</label>
                    <input type="text" class="form-control my-colorpicker" id="top" placeholder="Enter Top Color" name="top" required>
                </div>
                <div class="form-group">
                    <label for="bottom">Bottom Color</label>
                    <input type="text" class="form-control my-colorpicker1" id="bottom" placeholder="Enter Bottom Color" name="bottom" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
