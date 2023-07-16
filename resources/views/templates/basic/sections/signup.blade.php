@extends('templates.basic.layouts.app')
@section('content')
@php
    $policyPages = getContent('policy_pages.element',false,null,true);
@endphp
<div class="signup grad py-5 m-5">
    <ul class="nav nav-tabs">
        <li class="nav-item p-2 m-2">
            <a href="#login" class="btn fw-bolder badge bg-white text-wrap text-dark p-3" data-bs-toggle="tab">Login</a>
        </li>
        <li class="nav-item p-2 m-2">
            <a href="#register" class="btn fw-bolder badge bg-white text-wrap text-dark p-3" data-bs-toggle="tab">Don't have account ? Register here</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="login">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card grad m-2">
                        <div class="card-header">
                            <h1 class="text-white">Log In Form</h1>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="name" class="form-label text-white">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                        <label for="password" class="form-label text-white">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-outline-info text-white p-2 m-2">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="register">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card grad">
                        <div class="card-header">
                            <h1 class="text-white">Register Form</h1>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username" class="form-label text-white" name="username" >Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                                    <label for="email" class="form-label text-white" >Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                                    <label for="country" class="form-label text-white">Country</label>
                                    <select name="country" id="" class="form-control">
                                        <option value=""></option>
                                    </select>
                                    <label for="mobile" class="form-label text-white">Mobile</label>
                                    <div class="input-group ">
                                            <span class="input-group-text mobile-code">

                                            </span>
                                            <input type="hidden" name="mobile_code">
                                            <input type="hidden" name="country_code">
                                            <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control checkUser" required>
                                    </div>
                                    <label class="form-label text-white">@lang('Password')</label>
                                        <input type="password" class="form-control" name="password" required>
                                        @if($general->secure_password)
                                            <div class="input-popup">
                                                <p class="error lower">@lang('1 small letter minimum')</p>
                                                <p class="error capital">@lang('1 capital letter minimum')</p>
                                                <p class="error number">@lang('1 number minimum')</p>
                                                <p class="error special">@lang('1 special character minimum')</p>
                                                <p class="error minimum">@lang('6 character password')</p>
                                            </div>
                                        @endif
                                    <label class="form-label text-white">@lang('Confirm Password')</label>
                                    <input type="password" class="form-control" name="password_confirmation" required> 
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-outline-info text-white p-2 m-2">Register</button>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
