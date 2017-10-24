@extends('layouts.app')
@section('title','Edit Presents')
@section('content')

    <div class="container">
        <div class="row">
            <h2>Edit Presents</h2>
            <div class="col-md-9">
                <form action="{{route('present.edit.save', $present->id)}}" method="post" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="check_in">Check In</label>
                        <input type="text" name="check_in" value="{{$present->check_in}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="check_out">Check Out</label>
                        <input type="text" name="check_out" value="{{$present->check_out}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="check_in">Present Hours</label>
                        <input type="text" name="present_hours" value="{{$present->present_hours}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="check_in">Check In Method</label>
                        <input type="text" name="check_in_method" value="{{$present->check_in_method}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="check_in">Check Out Method</label>
                        <input type="text" name="check_out_method" value="{{$present->check_out_method}}" class="form-control">
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-success">Update Presents</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection