@extends('templates.basic.layouts.app')

@section('content')
<div class="container py-5 m-5 grad">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7 col-xl-5">
            <div class="card grad">
                <div class="card-header grad">
                    <h5 class="card-title text-white">{{ __($pageTitle) }}</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.data.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('First Name')</label>
                                <input type="text" class="form-control " name="firstname" value="{{ old('firstname') }}" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('Last Name')</label>
                                <input type="text" class="form-control " name="lastname" value="{{ old('lastname') }}" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('Address')</label>
                                <input type="text" class="form-control " name="address" value="{{ old('address') }}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('State')</label>
                                <input type="text" class="form-control " name="state" value="{{ old('state') }}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('Zip Code')</label>
                                <input type="text" class="form-control " name="zip" value="{{ old('zip') }}">
                            </div>

                            <div class="form-group col-sm-6">
                                <label class="form-label text-white">@lang('City')</label>
                                <input type="text" class="form-control " name="city" value="{{ old('city') }}">
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-info w-100 text-white">
                                @lang('Submit')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
