<div class="container">
    <h1>{{ $heading  }}</h1>
    @if(count($listings) > 0)
        @foreach($listings as $listing)
            <a href="/listings/{{ $listing['id'] }}">
                <h4>{{ $listing['title'] }}</h4>
            </a>
            <div>{{ $listing['description'] }}</div>
        @endforeach
    @else
        <p>No listings found</p>
    @endif

</div>

