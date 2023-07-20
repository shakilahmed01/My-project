@extends('templates.basic.layouts.app')
@section('content')
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7 col-xl-5">
            <div class="d-flex justify-content-center">
                <div class="verification-code-wrapper">
                    <div class="verification-area">
                        <h5 class="pb-3 text-center border-bottom text-white">@lang('Verify Email Address')</h5>
                        <form action="{{ route('user.password.verify.code') }}" method="POST" class="submit-form">
                            @csrf
                            <p class="verification-text text-white">@lang('A 6 digit verification code sent to your email address') :  {{ showEmailAddress($email) }}</p>
                            <input type="hidden" name="email" value="{{ $email }}">

                            @include('partials.verification_code')

                            <div class="form-group">
                                <button type="submit" class="btn grad text-white w-100 mb-3">@lang('Submit')</button>
                            </div>

                            <div class="form-group">
                                <p class="text-white">@lang('Please check including your Junk/Spam Folder. if not found, you can')</p>
                                <a href="{{ route('user.password.request') }}" class="text-white">@lang('Try to send again')</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
