@extends('layouts.app')
@section('title','Add Setting')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add New Settings</h2>
            <div class="col-md-9">
                <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="CompanyName">Company Name</label>
                        <input type="text" name="Company_name" class="form-control">
                    </div>

                        <label for="CompanyLogo">Logo</label>
                        <input type="file" name="logo" class="form-control">

                    <div class="form-group">
                        <label for="CompanyAddress">Company Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNo">Phone No</label>
                        <input type="text" name="phone_no" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="FacebookLink">Facebook Link</label>
                        <input type="text" name="facebook_link" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Terms">Terms & Conditions</label>
                        <textarea name="terms_condition" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Privacy">Privacy</label>
                        <textarea name="privacy" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="CompanyName">Weekend</label>
                        <select name="weekend" id="" class="form-control">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="CompanyName">Attendance Method</label>
                        <select name="attendance_method" id="" class="form-control">
                            <option value="Website">Website</option>
                            <option value="Wifi">Wifi</option>
                            <option value="Biometrics">Biometrics</option>
                        </select>
                    </div>
                        <div class="form-control">
                            <label for="fieldTracking">Field Tracking</label>
                            <input type="radio" name="field_tracking" value="On">On
                            <input type="radio" name="field_tracking" value="off">Off
                        </div>

                    <button type="submit" class="btn btn-success">Add Setting</button>

                </form>
            </div>
        </div>
    </div>
@endsection