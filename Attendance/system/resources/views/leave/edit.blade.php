@extends('layouts.app')
@section('Title','Edit Leave')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit Leave</h2>
                <form action="{{route('leave.edit.save',$leaves->id)}}" method="post">
                    {{csrf_field()}}
                        <label for="user_id">User Id</label>
                    <select name="user_id" class="form-control" id="">
                        @foreach($tableData as $d)
                            <option value="{{$d->id}}">{{$d->first_name}} {{$d->last_name}}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="reason">Reason</label>
                        <input type="text" name="reason" value="{{$leaves->reason}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="text" name="end_date" value="{{$leaves->end_date}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="text" name="start_date" value="{{$leaves->start_date}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" value="{{$leaves->status}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="validated_by">Validated By </label>
                        <input type="text" name="validated_by" value="{{$leaves->validated_by}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category Id </label>
                        <input type="text" name="category_id" value="{{$leaves->category_id}}" class="form-control">
                    </div>

                        <button type="submit" class="btn btn-success">New Leave</button>
                </form>
            </div>
        </div>
    </div>
@endsection