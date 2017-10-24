@extends('layouts.app')
@section('title','Positions')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Positions</h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>Position Name</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->position_name}}</td>
                            <td> <a href="{{route('position.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-2x"></i>Edit</a>
                                <a href="{{route('position.delete',$d->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a> </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection