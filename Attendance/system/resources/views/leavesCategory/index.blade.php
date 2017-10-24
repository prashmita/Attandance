@extends('layouts.app')
@section('title','Leave')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Leave Category</h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>Category_name</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->category_name}}</td>
                            <td> <a href="{{route('leavesCategory.edit',$d->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('leavesCategory.delete',$d->id)}}" class="btn btn-danger"> <i class="fa fa-trash fa-2x"></i>Delete</a> </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection