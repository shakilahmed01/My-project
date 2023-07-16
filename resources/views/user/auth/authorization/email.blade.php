@extends('templates.basic.layouts.app')
@section('content')
<div class="container py-5 m-5">
    <div class="d-flex justify-content-center">
        <div class="verification-code-wrapper">
            <div class="verification-area">
                @if(Session::has('message'))
                <button class ="btn btn-success text-white">{{Session::get('message')}}</button>
                @endif
                <h5 class="pb-3 text-center border-bottom text-white">@lang('Verify Email Address')</h5>
                <form action="{{route('user.verify.email')}}" method="POST" class="submit-form">
                    @csrf
                    <p class="verification-text text-white">@lang('A 6 digit verification code sent to your email address'):  {{ showEmailAddress(auth()->user()->email) }}</p>

                    @include('partials.verification_code')

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-outline-info text-white">@lang('Submit')</button>
                    </div>

                    <div class="mb-3">
                        <p class="text-white">
                            @lang('If you don\'t get any code'), <a class="text-white" href="{{route('user.send.verify.code', 'email')}}"> @lang('Try again')</a>
                        </p>

                        @if($errors->has('resend'))
                            <small class="text-danger d-block text-white">{{ $errors->first('resend') }}</small>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
