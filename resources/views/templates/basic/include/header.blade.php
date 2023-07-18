<header class="grad fixed-top" >
    <div class="row justify-content-center">
        <div class="col-md-5 p-2">
            <a href="{{route('home')}}" class="navbar-brand m-5">
                <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" class="rounded" width="100px" alt="">
            </a>
        </div>
        <div class="col-md-7 p-0 m-0">
            <ul class="nav justify-content-center py-3">
                @php
                $pages = App\Models\Page::where('tempname','templates.basic.')->where('is_default',Status::NO)->get();
                @endphp
                <li class="nav-item active"><a class="btn btn-outline-info fw-bolder text-white nav-link underline" href="{{route('home')}}">Home</a></li>
                    @foreach($pages as $k => $data)
                        <li class="nav-item"><a class="btn btn-outline-info fw-bolder text-white nav-link underline" href="{{route('pages',[$data->slug])}}"  class="nav-link">{{__($data->name)}}</a></li>
                    @endforeach
                @if(auth()->user())
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fullname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                        @lang('User Dashboard')
                                    </a>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="get" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                </li>
                @else
                <li class="nav-item active"><a class="btn btn-outline-info fw-bolder text-white nav-link underline" href="{{route('signup')}}">Sign In</a></li>
                @endif

            </ul>
        </div>
    </div>
</header>