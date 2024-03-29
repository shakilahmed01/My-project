@extends('layouts.app')
@section('content')
@php
use App\Constants\Status;
@endphp
<div class="container text-center">
  <div class="row justify-content-center p-3 p-md-5 m-2 m-lg-5">
    <div class="col-md-8">
       @if(auth()->user()->kv == Status::KYC_UNVERIFIED)
                <div class="alert alert-info" role="alert">
                  <h4 class="alert-heading">@lang('KYC Verification required')</h4>
                  <hr>
                  <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.  <a href="{{ route('user.kyc.form') }}">@lang('Click Here to Verify')</a></p>
                </div>
                @elseif(auth()->user()->kv == Status::KYC_PENDING)
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">@lang('KYC Verification pending')</h4>
                    <hr>
                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.  <a href="{{ route('user.kyc.data') }}">@lang('See KYC Data')</a></p>
                  </div>
       @endif

      <div class="card">
        <div class="card-header grad">
          @if(auth()->user()->user_role == Status::AGENT)
          <h1 class="text-white">Agent Dashboard</h1>
          @else
          <h1 class="text-white">Dashboard</h1>
          @endif
        </div>
         <img class="card-img" src="{{asset('assets/images/logoIcon/logo.png')}}" alt="Card image">
    </div>
  </div>
</div>
@endsection