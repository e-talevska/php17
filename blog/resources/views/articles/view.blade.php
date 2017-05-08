@extends('layouts.layout')

@section('content')

<h1>Article: {{$article->title}}</h1>
<div class="row">
    <image class="col-sm-12" width='50%' src="{{ asset('/uploads/'.$article->feature_image) }}" alt='{{$article->feature_image }}'>
    <div class="col-sm-6">{{ $article->excerpt }}</div>
    <div class="col-sm-6" style="text-align: right">{{ $article->published_at }}</div>
    <div class="col-sm-12" style="padding-top:30px">{{ $article->body }}</div>
</div>

@endsection