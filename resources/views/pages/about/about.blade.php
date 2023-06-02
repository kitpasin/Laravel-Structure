@extends("layouts.main")

@section("styles")
    @vite('resources/css/pages/about.css')
@endsection

@section("pages")
    <section id="home">
        <h1 class="text-4xl text-red-500 text-center font-bold underline">
            This is About Page
        </h1>
    </section>
@endsection

@section("scripts")
    @vite('resources/js/pages/about.js')
@endsection