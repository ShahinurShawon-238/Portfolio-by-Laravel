@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Working History</h2>
        </div>
        <div class="card-body">
            <form action="{{  url('working/history/update/'.$workings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldImage" value="{{$workings->image}}">
                <div class="form-group">
                    <label for="image">Organization Image or Logo</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Organization Image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Organization Name</label>
                    <input type="text" class="form-control" id="name" value="{{$workings->name}}" name="name">
                </div>
                <div class="form-group">
                    <label for="designation">Your Designation</label>
                    <input type="text" class="form-control" id="designation" value="{{$workings->designation}}" name="designation">
                </div>
                <div class="form-group">
                    <label for="from">Starting Date</label>
                    <input type="text" class="form-control" id="from" value="{{$workings->from}}" name="from">
                </div>
                <div class="form-group">
                    <label for="to">Ending Date</label>
                    <input type="text" class="form-control" id="to" value="{{$workings->to}}" name="to">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" value="{{$workings->contact}}" name="contact">
                </div>
                <div class="form-group">
                    Previous image:
                    <img src="{{asset($workings->image)}}" alt="" width="100px"
                        height="80px"><br>
                    Image address: {{$workings->image}}
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection