@extends('layouts.app')
@section('title','Presents')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Presents <span class="pull-right"></span></h2>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Present hours</th>
                        <th>Check in method</th>
                        <th>Check out method</th>
                        <th>Options</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($present  as $d)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->check_in}}</td>
                            <td>{{$d->check_out}}</td>
                            <td>{{$d->present_hours}}</td>
                            <td>{{$d->check_in_method}}</td>
                            <td>{{$d->check_out_method}}</td>
                            <td>
                                <a href="{{route('present.delete',$d->id)}}"  class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection