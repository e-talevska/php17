@extends ('layouts.layout')<!-- ili / ili . -->

@section ('title')
About
@endsection

@section ('content')<!-- mora da e isto so yield vo layout.blade.php -->
        <h2>Hello {{ $name }}</h2>
        @if (!empty($team))
        <h3>My team:</h3>
        <ul>
                    @foreach($team as $member)
                        <li>{{ $member }}</li>
                    @endforeach
        </ul>
        @endif
@endsection