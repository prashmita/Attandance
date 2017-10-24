@extends('layouts.app')
@section('title','Settings')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Settings <span class="pull-right"></span></h2>
                <table class="table  table-responsive table-bordered">
                    <tr>
                        <th>S.N</th>
                        <th>Company Name</th>
                        <th>Logo</th>
                        <th>Address</th>
                        <th>Options</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($data as $d)
                        <tr>

                            <td>{{$i}}</td>
                            <td>{{ $d->company_name }}</td>
                                <td><img src="{{asset('assets/images/'.$d->logo)}}" class="img-thumbnail" style="height:60px; width:60px;"/></td>
                            <td>{{ $d->address }}</td>
                            <td>
                                <a href="{{route('setting.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-2x"></i>Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection