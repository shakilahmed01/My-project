@php
  $serviceContent= getContent('service.content', true);
  $serviceElements= getContent('service.element', false);
@endphp
<div class="service py-5 m-5">
    <div class="text fs-5 badge bg-dark text-wrap py-3 my-3">
        <i class="fa-brands fa-servicestack fa-5x text-info"></i>
        <h1 class="text fw-bolder text-white">Service</h1>
    </div>
        <div class="card py-3 m-3 grad">
            <div class="card-body py-3 m-3 ">
                <div class="row text-center">
                    @foreach ($serviceElements as $service)
                        <div class="col-lg-4 my_style d-block d-lg-flex">
                            <div class="card {{__(@$service->data_values->bg_color)}}">
                            @php echo @$service->data_values->service_icon @endphp
                            <div class="title text-uppercase fs-5 fw-bolder badge bg-dark text-wrap text-success">{{__(@$service->data_values->title)}}</div>
                            <p class="fw-light text-white">{{__(@$service->data_values->description)}}</p>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
</div>