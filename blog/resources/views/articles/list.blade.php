@extends('layouts/layout')

@section('content')
<h1 class="page-header">Articles - <a href="{{ url("articles/create") }}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h1>
    @foreach($articles as $article)
    <h2><a href="#">{{$article->title}}</a> <a href="{{ url("articles/edit", ['id' => $article->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a></h2>
    <div class="content">{{$article->excerpt}}</div>
    @endforeach
@endsection