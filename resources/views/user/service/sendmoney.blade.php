@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 col-sm-2">
            <div class="card">
                <div class="card-header grad">
                    <h1 class="text-white">Send Money</h1>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row justify-content-center text-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">@lang('Country')</label>
                                            <select name="country" class="form-control form--control">
                                                @foreach($countries as $key => $country)
                                                    <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">@lang('Mobile')</label>
                                            <div class="input-group ">
                                                <span class="input-group-text mobile-code">

                                                </span>
                                                <input type="hidden" name="mobile_code">
                                                <input type="hidden" name="country_code">
                                                <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control form--control checkUser" required>
                                            </div>
                                            <small class="text-danger mobileExist"></small>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount">
                                    </div>
                                </div>
                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn grad text-white w-100">Send</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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