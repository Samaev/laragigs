@props(['listing'])
<x-card class="p-10 bg-black">
    <div class="flex">
        @if($listing->logo)
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{ asset('storage/'.$listing->logo) }}"
                alt="{{ $listing->title }}"
            />
        @else
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{asset('images/no-image.png')}}"
                alt="{{ $listing->title }}"
            />
        @endif

        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id}}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tags="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>

