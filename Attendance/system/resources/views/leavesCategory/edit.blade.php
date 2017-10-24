@extends('layouts.app')
@section('Title','Edit LeaveCategory')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit LeaveCategory</h2>
            <div class="col-md-9">
                <form action="{{route('leavesCategory.edit.save',$leaveCategory->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="leaveCategory">Permissions Name</label>
                        <input type="text" name="leaveCategory" value="{{$leaveCategory->leaveCategory}}" class="form-control">
                    </div>
                        <button type="submit" class="btn btn-success">New LeaveCategory</button>
                </form>
            </div>
        </div>
    </div>
@endsection