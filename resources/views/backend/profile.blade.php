@extends('layouts.backend')
@section('main')
    <div class="mt-4">
        @include("backend.partials._message")
    </div>

    <div class="card mt-4">
        <div class="card-header">
            My Profile
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route("profile") }}" method="post">
            @csrf
            <div class="form-group">
                <label for="fullName">Full Name :</label>
                <input name="full_name" type="text" class="form-control" id="fullName" value=" {{ $user->full_name }}"  required>
            </div>
            @if ($errors->has('full_name'))
                <div class="alert-danger">{{ $errors->first('full_name') }}</div>
            @endif

            <div class="form-group">
                <label for="email">Email :</label>
                <input name="email" type="email" class="form-control" id="email" value=" {{ $user->email }}"  required>
            </div>
            @if ($errors->has('email'))
                <div class="alert-danger">{{ $errors->first('email') }}</div>
            @endif

            <div class="form-group">
                <label for="phoneNumber">Phone Number :</label>
                <input name="phone_number" type="text" class="form-control" id="phoneNumber" value=" {{ $user->phone_number }}" required>
            </div>
            @if ($errors->has('phone_number'))
                <div class="alert-danger">{{ $errors->first('phone_number') }}</div>
            @endif

            <label for="address" >Address :</label>
            <textarea rows="2" cols="10" name="address" id="address" class="form-control" placeholder="{{ $user->address }}" required ></textarea>

            <button type="submit" class="btn btn-primary btn block" style="margin-top:20px;">Update Profile</button>
        </form>
    </div>


    <div class="card mt-4">
        <div class="card-header">
            Change password
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="old_password">Old Password :</label>
                <input name="old_password" type="password" class="form-control" id="old_password"  required>
            </div>
            @if ($errors->has('old_password'))
                <div class="alert-danger">{{ $errors->first('old_password') }}</div>
            @endif

            <div class="form-group">
                <label for="password">New Password :</label>
                <input name="password" type="password" class="form-control" id="password"  required>
            </div>
            @if ($errors->has('password'))
                <div class="alert-danger">{{ $errors->first('password') }}</div>
            @endif

            <div class="form-group">
                <label for="password_confirmation">Confirm Password :</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"  required>
            </div>
            @if ($errors->has('password_confirmation'))
                <div class="alert-danger">{{ $errors->first('password_confirmation') }}</div>
            @endif

            <button type="submit" class="btn btn-primary btn block">Update Password</button>
        </form>
    </div>
@endsection
