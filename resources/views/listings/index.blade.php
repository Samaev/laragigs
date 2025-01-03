<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4">
        @if(count($listings) > 0)
            @foreach($listings as $listing)
                <x-component-card :listing="$listing"/>
            @endforeach
        @else
            <p>No listings found yet</p>
        @endif

    </div>
    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>

