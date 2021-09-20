@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Icons</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('icon/update/'.$icons->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldImage" value="{{$icons->logo}}">
                <input type="hidden" name="oldImage2" value="{{$icons->shortCut}}">
                <div class="form-group">
                    <label for="logo">Update Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="shortcut">Update Shortcut Icon</label>
                    <input type="file" class="form-control" id="shortcut" name="shortcut">
                </div>
                <div class="form-group">
                    Previous Logo:
                    <img src="{{asset($icons->logo)}}" alt="" width="100px"
                        height="100px"><br>
                    Logo address: {{$icons->logo}}
                </div>
                <div class="form-group">
                    Previous Shortcut Icon:
                    <img src="{{asset($icons->shortCut)}}" alt="" width="100px"
                        height="100px"><br>
                    Shortcut Icon address: {{$icons->shortCut}}
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
