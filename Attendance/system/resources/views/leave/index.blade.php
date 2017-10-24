@extends('layouts.app')
@section('title','Leave')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Leaves</h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>User Name</th>
                        <th>Category_name</th>
                        <th>Reason</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Validated By</th>
                        <th>Leave Category Id</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->first_name}} {{$d->last_name}}</td>
                            <td>{{$d->reason}}</td>
                            <td>{{$d->start_date}}</td>
                            <td>{{$d->end_date}}</td>
                            <td>{{$d->status}}</td>
                            <td>{{$d->validated_by}}</td>
                            <td>{{$d->category_id}}</td>
                            <td> <a href="{{route('leave.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-2x"></i>Edit</a><a href="{{route('leave.delete',$d->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>Delete</a> </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection