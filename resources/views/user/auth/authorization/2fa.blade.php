@extends('templates.basic.layouts.app')
@section('content')
<div class="container py-5 m-5">
    <div class="d-flex justify-content-center">
        <div class="verification-code-wrapper">
            <div class="verification-area">
                <h5 class="pb-3 text-center border-bottom">@lang('2FA Verification')</h5>
                <form action="{{route('user.go2fa.verify')}}" method="POST" class="submit-form">
                    @csrf

                    @include('partials.verification_code')

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info w-100">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
