@extends('layouts.app')
@section('Title','Edit Permissions')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit Holidays</h2>
            <div class="col-md-9">
                <form action="{{route('holiday.edit.save',$holiday->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{$holiday->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" value="{{$holiday->date}}" class="form-control">
                    </div>
                        <button type="submit" class="btn btn-success">Update Holiday</button>
                </form>
            </div>
        </div>
    </div>
    @endsection