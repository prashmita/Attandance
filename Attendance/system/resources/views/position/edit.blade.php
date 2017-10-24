@extends('layouts.app');
@section('title','Edit Position')
@section('content')

    <div class="container">
        <div class="row">
            <h2>Edit Position</h2>
            <div class="col-md-9">

                <form action="{{route('position.edit.save',$position->id)}}" method="post" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="position_name">Position</label>
                        <input type="text" name="position_name" value="{{$position->position_name}}" class="form-control">
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-success">Update  Position</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection