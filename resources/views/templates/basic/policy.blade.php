@extends('templates.basic.layouts.app')
@section('content')
<section class="py-5 m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card grad">
                    <div class="card-header grad">
                        <h5 class="card-title text-white">{{ __($pageTitle) }}</h5>
                    </div>
                    <div class="card-body bg-light">
                        @php
                            echo $policy->data_values->details
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
