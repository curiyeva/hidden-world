
@props(['place'])

<article class="overflow-hidden rounded-2xl border border-white/10 bg-[#18211C]">
    <img
        src="{{ asset('images/places/' . $place->image) }}"
        alt="{{ $place->name }}"
        class="h-56 w-full object-cover"
    >

    <div class="p-5">
        <p class="text-sm text-emerald-400">
            {{ $place->country }} · {{ $place->category }}
        </p>

        <h2 class="mt-2 text-xl font-bold">
            {{ $place->name }}
        </h2>

        <p class="mt-3 text-sm text-gray-400">
            {{ $place->description }}
        </p>

        @if ($place->interesting_fact)
            <p class="mt-4 text-sm text-gray-300">
                <strong>Did you know?</strong>
                {{ $place->interesting_fact }}
            </p>
        @endif
    </div>
</article>
