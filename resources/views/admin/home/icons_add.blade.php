@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Icons</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.icon') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" required>
                </div>
                <div class="form-group">
                    <label for="shortcut">Shortcut Icon</label>
                    <input type="file" class="form-control" id="shortcut" name="shortcut" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
