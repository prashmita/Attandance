@extends('layouts.app')
@section('Title','Edit Permissions')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit Permissions</h2>
            <div class="col-md-9">
                <form action="{{route('permissions.edit.save',$permission->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="permission_name">Permissions Name</label>
                        <input type="text" name="permission_name" value="{{$permission->permission_name}}" class="form-control">
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-success">Update Permission</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection