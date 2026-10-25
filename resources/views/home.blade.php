
@extends('layouts.app')

@section('title', 'Hidden World — Explore')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-20">

    <p class="text-sm uppercase tracking-[0.3em] text-green-400">
        The world is full of secrets
    </p>

    <h1 class="text-5xl font-bold">
        Discover places
        <span class="text-green-400">beyond</span>
        the ordinary.
    </h1>

    <p class="text-lg text-gray-400">
        Explore hidden islands, forgotten cities and extraordinary
        places that most people have never seen.
    </p>
    <img
    src="/images/places/socotra.avif"
    alt="Socotra Island"
    class="mt-10 h-80 w-full rounded-2xl "
/>

    <a href="#explore"
       class="mt-10 inline-block rounded-full bg-green-500 px-8 py-4 font-semibold text-black transition hover:bg-green-400">
        Start exploring
    </a>

</section>

<section id="explore" class="mx-auto max-w-7xl px-6 pb-20">

    <p class="text-sm uppercase tracking-widest text-green-400">
        Start your journey
    </p>

    <h2 class="mt-3 text-3xl font-bold">
        The world is waiting.
    </h2>


<div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/socotra.avif" alt="Socotra Island" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Yemen</p>
            <h3 class="mt-2 text-xl font-bold">Socotra Island</h3>
            <p class="mt-3 text-sm text-gray-400">
                An extraordinary island known for its unusual trees and landscapes.
            </p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/canyon.avif" alt="Antelope Canyon" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">United States</p>
            <h3 class="mt-2 text-xl font-bold">Antelope Canyon</h3>
            <p class="mt-3 text-sm text-gray-400">
                A spectacular canyon shaped by wind and water.
            </p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/darwaza.avif" alt="Darwaza Gas Crater" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400 ">Turkmenistan</p>
            <h3 class="mt-2 text-xl font-bold">Darvaza Gas Crater</h3>
            <p class="mt-3 text-sm text-gray-400">
                A remarkable gas crater known for its fiery appearance.
            </p>
        </div>

    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/derinkuyu.webp" alt="Derinkuyu Underground City" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Turkey</p>
            <h3 class="mt-2 font-bold text-xl">Derinkuyu Underground City</h3>
            <p class="mt-3 text-sm text-gray-400">An underground city hidden beneath the surface</p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/hillier.avif" alt="Lake Hillier" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Australia</p>
            <h3 class="mt-2 font-bold text-xl">Lake Hillier</h3>
            <p class="mt-3 text-sm text-gray-400"></p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/meteora.avif" alt="Meteora" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Greece</p>
            <h3 class="mt-2 text-xl font-bold">Meteora</h3>
            <p class="mt-3 text-sm text-gray-400">Monasteries built on towering rock formations.</p>
        </div>

    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/pamukkal.avif" alt="Pamukkale" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Turkey</p>
            <h3 class="mt-2 text-xl font-bold">Pamukkale</h3>
            <p class="mt-3 text-sm text-gray-400">White terraces formed by mineral-rich thermal waters.</p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/roraima.avif" alt="Mount Roraima" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">South America</p>
            <h3 class="mt-2 text-xl font-bold">Mount Roraima</h3>
            <p class="mt-3 text-sm text-gray-400">A flat-topped mountain surrounded by dramatic cliffs.</p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/waitamo.avif" alt="Waitomo Glowworm Caves">
        <div class="p-5">
            <p class="text-sm text-green-400">New Zealand</p>
            <h3 class="mt-2 text-xl font-bold">Waitomo Glowworm Caves</h3>
            <p class="mt-3 text-sm text-gray-400">Caves illuminated by tiny glowing creatures</p>
        </div>
    </article>

    <article class="rounded-2xl border-none bg-green-800">
        <img src="/images/places/zandyan.avif" alt="Zandyan" class="h-56 w-full">
        <div class="p-5">
            <p class="text-sm text-green-400">Discover</p>
            <h3 class="mt-2 text-xl font-bold">Zandyan</h3>
            <p class="mt-3 text-sm text-gray-400">Discover this unusual place and its story.</p>
        </div>
    </article>


</div>


</section>

@endsection
