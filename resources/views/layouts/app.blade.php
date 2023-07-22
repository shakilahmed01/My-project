@php
use App\Constants\Status;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle }}</title>
    <link rel="shortcut icon" type="image/png" href="{{getImage(getFilePath('logoIcon') .'/favicon.png')}}">

@include('admin.include.css')
@stack('style-lib')
@stack('style')
<style>

</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light grad shadow-sm ">
            <div class="container">

                <a class="navbar-brand" href="{{route('user.home')}}">
                <img class="rounded" src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" width="50px" height="50px" id="my_logo_image">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('user.login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('user.register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Support Ticket
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('ticket.open') }}">
                                    @lang('Create New')
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ticket.index') }}" >
                                    @lang('My Ticket')
                                    </a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-white" href="#" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Service
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->user_role == Status::AGENT)
                                    <a class="dropdown-item" href="{{route('user.cashin')}}">
                                        {{ __('Cash In') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('user.sendmoney') }}">
                                        {{ __('Send Money') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.cashout') }}" >
                                        {{ __('Cash Out') }}
                                    </a>

                                </div>
                            </li>
                            @if(auth()->user()->user_role == Status::AGENT)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-white" href="#" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Deposit
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.deposit.index') }}">
                                        {{ __('Deposit Money') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.deposit.history') }}" >
                                        {{ __('Deposit Log') }}
                                    </a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-white" href="#" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Withdraw
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.withdraw') }}">
                                        {{ __('Withdraw Money') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.withdraw.history') }}" >
                                        {{ __('Withdraw
                                    Log') }}
                                    </a>

                                </div>
                            </li> 
                            @endif

                            <li class="nav-item dropdown">
                                <a  class="nav-link text-white" href="{{ route('user.transactions') }}" role="button">
                                    Transaction
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fullname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.change.password') }}">
                                        @lang('Change Password')
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.profile.setting') }}">
                                        @lang('Profile Setting')
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.twofactor') }}">
                                        @lang('2FA Security')
                                    </a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('user.logout') }}">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="get" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="{{ route('user.logout') }}">Logout</a>
                                    </div>
                                </div>
                            </div>
                    </div>
        <main class="py-4 ">
            @include('partials.notify')
            @yield('content')
        </main>
    </div>

    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/global/js/bootstrap.bundle.min.js')}}"></script>

@stack('script-lib')

@stack('script')


</body>
</html>
