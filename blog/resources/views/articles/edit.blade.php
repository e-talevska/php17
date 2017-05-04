@extends('layouts/layout')

@section('content')
<h1>Edit Article</h1>
<hr>
{!! Form::model($article, ['url' => 'articles/'.$article->id, 'method' => 'PATCH', 'files' => true]) !!}

<img src="{{asset('/uploads/'.$article->feature_image) }}">

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Description') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Excerpt') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('feature_image', 'Image') }}
    {{ Form::file('feature_image', ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('published_at', 'Published At') }}
    {{ Form::text('published_at', null, ['class' => 'form-control']) }}
</div>

<button type="submit" class="btn btn-primary">Edit Article</button>

{!! Form::close() !!}

@if($errors->any()) 
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@endsection