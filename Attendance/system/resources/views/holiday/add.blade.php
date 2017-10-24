@extends('layouts.app')
@section('title','Add Holiday')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New Holiday</h2>
            <div class="col-md-9">
                <form action="{{route('holiday.store')}}" method="post">
                    {{csrf_field()}}
                    <div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="date" class="form-control pull-right" id="datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                            <button type="submit" class="btn btn-success">Add New Holidays</button>
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
        });
    </script>
@endsection
