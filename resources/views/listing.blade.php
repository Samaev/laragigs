@extends('layout')
@section('content')
    <div >
        <h3>{{ $heading }}</h3>
        <h6>{{ $listing['title'] }}</h6>
        <div>{{ $listing['description'] }}</div>
    </div>
@endsection
