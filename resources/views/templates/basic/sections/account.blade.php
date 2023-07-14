@php
  $accountContent= getContent('account.content', false);
  $accountElements= getContent('account.element', true);
@endphp
<div class="text fs-5 badge bg-dark text-wrap py-3 my-3">
        <i class="fa fa-folder-open fa-5x text-success"></i>
        <h1 class="text fw-bolder text-white">Open E-Money Account</h1>
    </div>
    @foreach ($accountContent as $account)
    <div class="row justify-content-center p-3 m-3">
        <div class="col-md-5 p-3 m-3">
            <img class="img-fluid rounded-circle" src="{{ getImage('assets/images/frontend/account/'.@$account->data_values->image1, '608x261')}}" alt="...">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{__(@$account->data_values->heading)}}</h4>
                <p>{{__(@$account->data_values->subheading)}}</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
        </div>
        <div class="col-md-4 contact_form p-3 m-3">
            <img src="{{ getImage('assets/images/frontend/account/'.@$account->data_values->image2, '608x447')}}" class="img-fluid rounded-circle" alt="...">

            <div class="alert alert-primary" role="alert">
                Don't have account?? <a href="{{__(@$account->data_values->register_link)}}" class="alert-link">go to register now </a>. Give it a click if you like.
            </div>
        </div>
    </div>
    @endforeach