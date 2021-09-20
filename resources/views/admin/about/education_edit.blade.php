@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Education Info</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('education/update/'.$education->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldImage" value="{{$education->image}}">
                <div class="form-group">
                    <label for="image">Institute Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Institute Image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Institute Name</label>
                    <input type="text" class="form-control" id="name" value="{{$education->name}}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="field">Field Of Education</label>
                    <input type="text" class="form-control" id="field" value="{{$education->fieldOfEducation}}" name="field" required>
                </div>
                <div class="form-group">
                    <label for="gpa">GPA</label>
                    <input type="text" class="form-control" id="gpa" value="{{$education->gpa}}" name="gpa" required>
                </div>
                <div class="form-group">
                    <label for="inScaleOf">In Scale Of</label>
                    <input type="text" class="form-control" id="inScaleOf" value="{{$education->inScaleOf}}" name="inScaleOf" required>
                </div>
                <div class="form-group">
                    <label for="year">Passing Year</label>
                    <input type="text" class="form-control" id="year" value="{{$education->year}}" name="year" required>
                </div>
                <div class="form-group">
                    Previous image:
                    <img src="{{asset($education->image)}}" alt="" width="100px"
                        height="80px"><br>
                    Image address: {{$education->image}}
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
