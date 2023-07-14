@extends('templates.basic.layouts.app')
@section('content')
@php
  $bannerContent  = getContent('banner.content', false);
  $bannerElements = getContent('banner.element', true);
@endphp
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>   
    </div>
        <div class="carousel-inner">
            @foreach ($bannerContent as $banner)
            <div class="carousel-item active">
                <img src="{{ getImage('assets/images/frontend/banner/'.@$banner->data_values->background_image1, '1903x635')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                    <div class="carousel-caption d-none d-md-block fs-2">
                        <h5 class="badge bg-dark text-wrap">{{__(@$banner->data_values->heading)}}</h5>
                        <p>{{__(@$banner->data_values->subheading)}}.</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="{{ getImage('assets/images/frontend/banner/'.@$banner->data_values->background_image2, '1903x635')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                    <div class="carousel-caption d-none d-md-block fs-2">
                        <h5 class="badge bg-dark text-wrap">{{__(@$banner->data_values->heading)}}</h5>
                        <p>{{__(@$banner->data_values->subheading)}}.</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="{{ getImage('assets/images/frontend/banner/'.@$banner->data_values->background_image3, '1903x635')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                    <div class="carousel-caption d-none d-md-block fs-2">
                        <h5 class="badge bg-dark text-wrap">{{__(@$banner->data_values->heading)}}</h5>
                        <p>{{__(@$banner->data_values->subheading)}}.</p>
                    </div>
            </div>
            @endforeach 
        </div>       
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

</div>
@if(@$sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include('templates.basic.sections.'.$sec)
        @endforeach
@endif
<!-- start Contact Section -->
<div class="contact">
    <div class="text badge bg-dark text-wrap py-3 my-3">
        <i class="fa-regular fa-user fa-5x text-white"></i>
        <h1 class="text fw-bolder text-white">Contact Us</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 grad rounded contact_form py-3 m-5">
        <h1 class="fw-bolder text-white">Contact Form</h1>
            <form action="{{route('contact.submit')}}" method="post">
                @csrf
                <div class="form-group p-1 m-3">
                    <label for="name" class="text-white fw-bolder">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="email" class="text-white fw-bolder">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="name" class="text-white fw-bolder">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter your subject">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="message" class="text-white fw-bolder">Message</label>
                    <textarea class="form-control" name="message" placeholder="Enter your Message" ></textarea>
                </div>
                <div class="form-group p-1 m-1">
                    <button type="submit" class="btn btn-outline-info text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
                        <!-- End Contact section -->
@endsection