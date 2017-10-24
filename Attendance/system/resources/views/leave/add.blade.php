@extends('layouts.app')
@section('title','Add Leave')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New Leave</h2>
            <div class="col-md-9">
                <form action="{{route('leave.store')}}" method="post">
                    {{csrf_field()}}
                    <div>
                        <div class="form-group">
                            <label for="user_id">User Name</label>
                            <select name="user_id" class="form-control" id="">
                                @foreach($tableData as $d)
                                    <option value="{{$d->id}}">{{$d->first_name}} {{$d->last_name}}</option>
                                @endforeach
                            </select>
                            <label for="reason">Reason</label>{{--textarea rakhne--}}
                            <input type="text" name="reason" class="form-control">
                            <label for="start_date">Start Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="start_date" class="form-control pull-right" id="datepicker">
                            </div>
                            <label for="end_date">End Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="end_date" class="form-control pull-right" id="datepicker1">
                            </div>


                            <label for="category_id">Leave Category Id</label>
                            <input type="number" name="category_id" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-success">Add New Leave</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
        <!-- bootstrap datepicker -->
    <script src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script>
        $(function () {
//Date picker
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
                sideBySide: true
            });
            $('#datepicker1').datepicker({
                format: "yyyy-mm-dd",
                sideBySide: true
            });
        });
    </script>
@endsection

