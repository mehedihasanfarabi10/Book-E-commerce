@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.Login')
    @include('components.Footer')
    {{-- <script>
        (async () => {
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
        })()
    </script> --}}
{{-- @endsection --}}