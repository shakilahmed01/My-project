@extends('templates.basic.layouts.app')
@section('content')
@php
    $policyPages = getContent('policy_pages.element',false,null,true);
@endphp
<div class="signup grad py-5 m-5">
    <ul class="nav nav-tabs">
        <li class="nav-item p-2 m-2">
            <a href="#login" class="btn fw-bolder badge bg-white text-wrap text-dark p-3 active" data-bs-toggle="tab">Login</a>
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
                                <form action="{{ route('user.login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-label text-white">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                                        <label for="password" class="form-label text-white">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info w-100 text-white p-2 m-2">Log In</button>
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
                                <form action="{{ route('user.register') }}" method="post" class="verify-gcaptcha">
                                    @csrf
                                    <div class="form-group">
                                        @if(session()->get('reference') != null)
                                            <label for="referenceBy" class="form-label text-white">@lang('Reference by')</label>
                                            <input type="text" name="referBy" id="referenceBy" class="form-control" value="{{session()->get('reference')}}" readonly>
                                        @endif
                                        <label for="username" class="form-label text-white" name="username" >Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                                        <label for="email" class="form-label text-white" >Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                                        <label for="country" class="form-label text-white">Country</label>
                                        <select name="country" id="" class="form-control">
                                                @foreach($countries as $key => $country)
                                                    <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                                                @endforeach
                                        </select>
                                        <label for="mobile" class="form-label text-white">Mobile</label>
                                        <div class="form-group">
                                                <span class="form-group text-white  mobile-code badge bg-dark text-wrap">
                                                </span>
                                                <input type="hidden" name="mobile_code">
                                                <input type="hidden" name="country_code">
                                                <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control checkUser" required>
                                                <small class="text-danger mobileExist"></small>
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
                                        @if($general->agree)
                                        <div class="form-group">
                                            <input type="checkbox" id="agree" @checked(old('agree')) name="agree" required>
                                            <label class="text-white">@lang('I agree with')</label> <span >@foreach($policyPages as $policy) <a class="text-white" href="{{ route('policy.pages',[slug($policy->data_values->title),$policy->id]) }}">{{ __($policy->data_values->title) }}</a> @if(!$loop->last), @endif @endforeach</span>
                                            
                                        </div>
                                        @endif
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-info w-100 text-white p-2 m-2">Register</button>
                                        </div>   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@if($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
@push('script')
    <script>
      "use strict";
        (function ($) {
            @if($mobileCode)
            $(`option[data-code={{ $mobileCode }}]`).attr('selected','');
            @endif

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));

            $('.checkUser').on('focusout',function(e){
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response.data != false && response.type == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response.data != false){
                    $(`.${response.type}Exist`).text(`${response.type} already exist`);
                  }else{
                    $(`.${response.type}Exist`).text('');
                  }
                });
            });
        })(jQuery);

    </script>
@endpush