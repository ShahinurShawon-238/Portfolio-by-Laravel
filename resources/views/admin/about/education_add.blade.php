@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Education Info</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.education') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Institute Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Institute Image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="name">Institute Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Institute Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="field">Field Of Education</label>
                    <input type="text" class="form-control" id="field" placeholder="Enter Field Of Education" name="field" required>
                </div>
                <div class="form-group">
                    <label for="gpa">GPA</label>
                    <input type="text" class="form-control" id="gpa" placeholder="Enter Your GPA/CGPA" name="gpa" required>
                </div>
                <div class="form-group">
                    <label for="inScaleOf">In Scale Of</label>
                    <input type="text" class="form-control" id="inScaleOf" placeholder="Enter In Scale Of GPA/CGPA" name="inScaleOf" required>
                </div>
                <div class="form-group">
                    <label for="year">Passing Year</label>
                    <input type="text" class="form-control" id="year" placeholder="Enter Your Passing Year" name="year" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
