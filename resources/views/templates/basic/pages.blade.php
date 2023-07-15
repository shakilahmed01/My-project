@extends('templates.basic.layouts.app')
@section('content')
    @if($sections != null)
        @foreach(json_decode($sections) as $sec)
            @include('templates.basic.sections.'.$sec)
        @endforeach
    @endif
@endsection
