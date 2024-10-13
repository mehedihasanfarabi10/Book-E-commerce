@extends('layout.app')
@section('content')
   
@include('components.MenuBar')
    @include('components.ByCategoryList')
   
    @include('components.Footer')
    {{-- <script>
        (async () => {
            await Category();
            await ByCategory();
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');

            await TopBrands();
        })()
    </script> --}}
@endsection