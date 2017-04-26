@extends('layouts/layout')

@section('content')
<h1 class="page-header">Articles</h1>
    @foreach($articles as $article)
    <h2><a href="#">{{$article->title}}</a></h2>
    <div class="content">{{$article->body}}</div>
    @endforeach
@endsection