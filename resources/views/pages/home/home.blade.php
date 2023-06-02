@extends("layouts.main")

@section("styles")
    @vite('resources/css/pages/home.css')
@endsection

@section("pages")
    @include("pages.home.sections.first")
    @include("pages.home.sections.second")
    @include("pages.home.sections.third")
@endsection

@section("scripts")
    @vite('resources/js/pages/home.js')
@endsection

