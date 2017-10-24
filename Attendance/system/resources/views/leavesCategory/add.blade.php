@extends('layouts.app')
@section('title','Leave Category')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New LeaveCategory</h2>
            <div class="col-md-9">
                <form action="{{route('leavesCategory.store')}}" method="post" >
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="leaveCategory">Category Name</label>
                            <input type="text" name="leaveCategory" class="form-control">
                        </div>
                    <button type="submit" class="btn btn-success">Add LeaveCategory</button>
                </form>
            </div>
        </div>
    </div>
@endsection