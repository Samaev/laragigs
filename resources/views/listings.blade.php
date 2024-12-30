@extends('layout')
@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4">
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
@endsection

