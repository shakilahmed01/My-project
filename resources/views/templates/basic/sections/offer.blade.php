@php
  $offerContent= getContent('offer.content', true);
  $offerElements= getContent('offer.element', false);
@endphp
<div class="offer py-5 m-5">
<div class="text fs-5 badge bg-dark text-wrap">
            <i class="fa fa-gift fa-5x text-danger" aria-hidden="true"></i>
            <h1 class="text fw-bolder text-white">Current Offers</h1>
    </div>
    <div class="heading">
        <div class="row justify-content-center">
            <div class="col-md-8 alert alert-warning alert-dismissible fade show p-3 m-3" role="alert">
                <strong>{{__(@$offerContent->data_values->heading)}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            <div class="col-md-3 alert alert-success alert-dismissible fade show p-3 m-3" role="alert">
                <strong>{{__(@$offerContent->data_values->subheading)}}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <div class="card grad rounded-circle p-3 m-3">
        <div class="row text-center justify-content-center">
            @foreach ($offerElements as $offer)
                <div class="col-md-3 d-block d-flex">
                    <div class="card grad rounded-circle">
                        <img src="{{ getImage('assets/images/frontend/offer/'.@$offer->data_values->image, '608x261')}}" 
                                class="card-img-top rounded-circle"
                            alt="img">
                        <div class="card-body rounded-circle">
                            <p class="fw-light text-white">{{__(@$offer->data_values->description)}}</p>
                        </div>
                        <div class="form-control grad rounded-circle">
                        <a href="{{__(@$offer->data_values->offer_link)}}" class="btn btn-outline-info rounded-circle">Offer Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
                                            
        <div class="btn-group py-3 my-3">
                <a href="{{__(@$offerContent->data_values->all_offer_link)}}" class="btn btn-outline-info btn-lg rounded-circle">All Offers</a>
        </div>
    </div>
</div>

                      