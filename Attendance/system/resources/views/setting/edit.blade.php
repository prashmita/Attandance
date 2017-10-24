@extends('layouts.app');
@section('title','Edit Setting')
@section('content')

    <div class="container">
        <div class="row">
            <h2>Edit Settings</h2>
            <div class="col-md-9">

                <form action="{{route('setting.edit.save',$setting->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="CompanyName">Company Name</label>
                        <input type="text" name="Company_name" value="{{$setting->company_name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="CompanyLogo">Logo</label><br/>
                        <img src="{{asset('assets/images/'.$setting->logo)}}" alt="">
                        <input type="file" name="logo" >
                    </div>
                    <div class="form-group">
                        <label for="CompanyAddress">Company Address</label>
                        <input type="text" name="address" value="{{$setting->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNo">Phone No</label>
                        <input type="text" name="phone_no" value="{{$setting->phone_no}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="FacebookLink">Facebook Link</label>
                        <input type="text" name="facebook_link" value="{{$setting->facebook_link}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Terms">Terms & Conditions</label>
                        <textarea name="terms_condition" class="form-control" id="" cols="30" rows="10">{{$setting->terms_condition}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Privacy">Privacy</label>
                        <textarea name="privacy" class="form-control" id="" cols="30" rows="10">{{$setting->privacy}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="CompanyName">Weekend</label>
                        <select name="weekend" id="" class="form-control">
                            <option value="Sunday" @if($setting->weekend == 'Sunday') selected @endif>Sunday</option>
                            <option value="Monday" @if($setting->weekend == 'Monday') selected @endif>Monday</option>
                            <option value="Tuesday" @if($setting->weekend == 'Tuesday') selected @endif>Tuesday</option>
                            <option value="Wednesday" @if($setting->weekend == 'Wednesday') selected @endif>Wednesday</option>
                            <option value="Thursday" @if($setting->weekend == 'Thursday') selected @endif>Thursday</option>
                            <option value="Friday" @if($setting->weekend == 'Friday') selected @endif>Friday</option>
                            <option value="Saturday" @if($setting->weekend == 'Saturday') selected @endif>Saturday</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="CompanyName">Attendance Method</label>
                        <select name="attendance_method" id="" class="form-control">
                            <option value="Website" @if($setting->attendance_method == 'Website') selected @endif >Website</option>
                            <option value="Wifi" @if($setting->attendance_method == 'Wifi') selected @endif >Wifi</option>
                            <option value="Biometrics" @if($setting->attendance_method == 'Biometrics') selected @endif>Biometrics</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="fieldTracking">Field Tracking</label>
                        <input type="radio" name="field_tracking" value="on" @if($setting->field_tracking == 'on') checked  @endif>On
                        <input type="radio" name="field_tracking" value="off" @if($setting->field_tracking == 'off') checked @endif>Off
                    </div>

                    <div class="form-control">
                        <button type="submit" class="btn btn-success">Update  Setting</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection