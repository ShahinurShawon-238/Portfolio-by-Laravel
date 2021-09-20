@extends('admin.admin_master')
@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Skill</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.skill')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="skillName">Skill name</label>
                    <input type="text" class="form-control" id="skillName" placeholder="Enter Skill Name"
                        name="skillName">
                </div>
                <div class="form-group">
                    <label for="skillPercent">Skill Percentage</label>
                    <input type="number" min="0" max="100" class="form-control" id="skillPercent" placeholder="Enter Skill Percentage"
                        name="skillPercent">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
