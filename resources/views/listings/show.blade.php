<x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card>
            <div
                class="flex flex-col items-center justify-center text-center"
            >
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

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <x-listing-tags :tags="$listing->tags"/>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>
                        <p>
                            {{ $listing->description }}
                        </p>

                        <a
                            href="mailto:{{ $listing->email }}"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a
                        >

                        <a
                            href="{{ $listing->website}}"
                            target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                            Website</a
                        >
                    </div>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6 ">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil mr-4"></i>Edit
            </a>
            <form action="/listings/{{$listing->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500" type="submit">
                    <i class="fa-solid fa-trash mr-4"></i>
                    Delete
                </button>
            </form>
        </x-card>
    </div>
</x-layout>
