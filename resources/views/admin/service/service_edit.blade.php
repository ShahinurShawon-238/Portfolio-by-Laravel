@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Service</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('service/update/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldImage" value="{{$service->image}}">
                <div class="form-group">
                    <label for="image">Update Service Icon</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Service Image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Update Service Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $service->name }}" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Update Service Description</label>
                    <textarea class="form-control" name="description" id="description"
                        rows="2">{{ $service->description }}</textarea>
                </div>
                <div class="form-group">
                    Previous image:
                    <img src="{{asset($service->image)}}" alt="{{$service->name}}" width="100px"
                        height="50px"><br>
                    Image address: {{$service->image}}
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
