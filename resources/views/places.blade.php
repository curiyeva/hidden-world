
@extends('layouts.app')

@section('title', 'Explore Places — Hidden World')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-16">

    <h1 class="text-4xl font-bold">
        Hidden Places Around the World
    </h1>

    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($places as $place)
            <x-place-card :place="$place" />
        @endforeach
    </div>

</section>
@endsection
