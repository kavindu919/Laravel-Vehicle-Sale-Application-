@extends('layout.clean')

@section('childContent')
    @include('layout.partials.header')
    @yield('content')
    <footer>
    @section('footerLinks')
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
    @show

    {{-- @yield('footerLinks') --}}
</footer>
@endsection
