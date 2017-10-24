@extends('layouts.app')
@section('title','Holiday')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Holidays</h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <td>S.N</td>
                        <td>Title</td>
                        <td>Date</td>
                    </tr>
                    <tr>
                        <?php $i=1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->title}} </td>
                            <td>{{$d->date}}</td>
                            <td> <a href="{{route('holiday.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-2x"></i>Edit</a><a href="{{route('holiday.delete',$d->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>Delete</a> </td>
                        </tr>
                        <?php $i++; ?>
                            @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
