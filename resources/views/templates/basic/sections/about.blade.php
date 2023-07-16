@php
  $aboutContent= getContent('about.content', true);
  $aboutElements= getContent('about.element', false);
@endphp
<div class="about py-5 m-5">
    <div class="text badge bg-dark text-wrap py-3 my-3">
        <i class="fa fa-folder-open fa-5x text-success"></i>
        <h1 class="text fw-bolder text-white">About Us</h1>
    </div>
        <div class="row justify-content-center my_style">
            <h1 class="text-white mb-2 py-3">Board of Directors</h1>
            @foreach($aboutElements as $about)
            <div class="col-md-2 py-3 m-3">
                <img class="img-thumbnail rounded-circle" src="{{ getImage('assets/images/frontend/about/'.@$about->data_values->image, '186x120')}}" alt="">
                <h3 class="text-white text-bolder">{{__(@$about->data_values->name)}}</h3>
                <p class="fw-light text-white">{{__(@$about->data_values->designation)}}</p>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            @php echo @$aboutContent->data_values->about_icon @endphp
            <h1 class="text-white py-3">{{(@$aboutContent->data_values->heading)}}</h1>
            <div class="col-md-3 my_style p-3 m-3">
                <p class="text-white fw-light">{{(@$aboutContent->data_values->description)}}</p>
            </div>
            <div class="col-md-5 p-3 m-3 my_style">
                <img class="img-fluid" src="{{ getImage('assets/images/frontend/about/'.@$aboutContent->data_values->about_image, '518x345')}}" alt="">
            </div>
        </div>
</div>

