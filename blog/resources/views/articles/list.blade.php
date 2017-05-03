@extends('layouts/layout')

@section('content')
<h1 class="page-header">Articles - <a href="{{ url("articles/create") }}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h1>
    @foreach($articles as $article)
    <h2><a href="#">{{$article->title}}</a></h2>
    <div class="content">{{$article->body}}</div>
    @endforeach
@endsection