@extends('layouts.layout')

@section('content')
<h1>Edit Article</h1>
<hr> 
{!! Form::model($article, ['url' => 'articles/'.$article->id, 'method' => 'PATCH', 'files' =>true]) !!}  
    <img src="/uploads/{{ $article->feature_image }}" alt='{{ $article->feature_image }}'>
    @include('articles._form',['buttonText' => 'Edit Articles'])
{!! Form::close() !!}
@include('parts._errors')
@endsection