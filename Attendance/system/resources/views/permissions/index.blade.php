@extends('layouts.app')
@section('title','Permissions')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Permissions </h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>Permission Name</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->permission_name}}</td>
                            <td>
                                <a href="{{route('permissions.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-2x"></i>Edit</a>
                                <a href="{{route('permissions.delete',$d->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>Delete</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
