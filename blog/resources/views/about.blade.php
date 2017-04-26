@extends('layouts/layout')

@section('title')
About
@endsection

@section('content')
    <h1>Hello world we are testing {{ $name . " " . $caj }}</h1>
        
    @if(!empty($team))
        <h3>My Team:</h3>
        <ul>
            @foreach($team as $member)
                <li>{{ $member }}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('scripts')
    JS scripts
@endsection