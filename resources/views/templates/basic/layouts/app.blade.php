<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle}}</title>
    @include('templates.basic.include.css')
</head>
<body>
@include('partials.notify')
    <div class="container-fluid grad text-center">
    @include('templates.basic.include.header')
          @yield('content')
    @include('templates.basic.include.footer')
    </div>
@include('templates.basic.include.js')
@stack('script')

</body>
</html>