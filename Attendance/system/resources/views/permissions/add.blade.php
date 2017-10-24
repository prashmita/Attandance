@extends('layouts.app')
@section('title','Add Permission')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New Permission</h2>
            <div class="col-md-9">
                <form action="{{route('permissions.store')}}" method="post">
                   {{csrf_field()}}
                    <div>
                        <div class="form-group">
                            <label for="permission_name">Permission Name</label>
                            <input type="text" name="permission_name" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-success">Add New Permission</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 @endsection
