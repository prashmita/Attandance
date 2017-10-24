@extends('layouts.app')
@section('title','Add Position')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New Position</h2>
            <div class="col-md-9">
                <form action="{{route('position.store')}}" method="post" >
                    {{csrf_field()}}
                    <div>
                        <div class="form-group">
                            <label for="position_name">Position name</label>
                            <input type="text" name="position_name" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-success">Add Setting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection