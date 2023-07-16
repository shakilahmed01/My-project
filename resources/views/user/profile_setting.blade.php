@extends('templates.basic.layouts.app')
@section('content')
    <div class="profile grad py-5 m-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card grad">
                    <div class="card-header grad">
                        <h5 class="card-title text-white">@lang('Profile')</h5>
                        <h5 class="text-white">Your Refferel Link (' http://127.0.0.1:8000/user/register/{{auth()->user()->username}} ')</h5>
                    </div>
                    <div class="card-body">
                        <form class="register" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('First Name')</label>
                                    <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('Last Name')</label>
                                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('E-mail Address')</label>
                                    <input class="form-control " value="{{$user->email}}" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('Mobile Number')</label>
                                    <input class="form-control" value="{{$user->mobile}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('Address')</label>
                                    <input type="text" class="form-control" name="address" value="{{@$user->address->address}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label text-white">@lang('State')</label>
                                    <input type="text" class="form-control" name="state" value="{{@$user->address->state}}">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label class="form-label text-white">@lang('Zip Code')</label>
                                    <input type="text" class="form-control " name="zip" value="{{@$user->address->zip}}">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label class="form-label text-white">@lang('City')</label>
                                    <input type="text" class="form-control " name="city" value="{{@$user->address->city}}">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label class="form-label text-white">@lang('Country')</label>
                                    <input class="form-control " value="{{@$user->address->country}}" disabled>
                                </div>

                            </div>

                            <div class="form-group p-1">
                                <button type="submit" class="btn btn-outline-info text-white w-100">@lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
