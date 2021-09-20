@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Social Account</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('social/media/update/'.$socialMedia->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" value="{{$socialMedia->facebook}}" name="facebook">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" value="{{$socialMedia->twitter}}" name="twitter">
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" value="{{$socialMedia->linkedin}}" name="linkedin">
                </div>
                <div class="form-group">
                    <label for="github">Github</label>
                    <input type="text" class="form-control" id="github" value="{{$socialMedia->github}}" name="github">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
