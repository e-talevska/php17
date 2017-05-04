@extends('layouts\layout')

@section('content')
<h2>Edit Article</h2>
<hr>
{!! Form::model($article, ['url' => 'articles/'.$article->id,'method' => 'PATCH','files' => true]) !!}
    
<div class="form-group">
        {{ Form::label('title','Title') }}
        {{ Form::text('title',null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('slug','Slug') }}
        {{ Form::text('slug',null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('excerpt','Excerpt') }}
        {{ Form::textarea('excerpt',null,['class' => 'form-control','rows' => 3]) }}
    </div>
    <div class="form-group">
        {{ Form::label('body','Content') }}
        {{ Form::textarea('body',null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id','Category') }}
        {{ Form::select('category_id',$categories,null,['class' => 'form-control']) }}
    </div>
    <image width='50%' src='/uploads/{{ $article->feature_image }}' alt='{{$article->feature_image }}'>
    <div class="form-group">
        {{ Form::label('feature_image','Feature Image') }}
        {{ Form::file('feature_image',['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('published_at','Published At') }}
        {{ Form::text('published_at',null,['class' => 'form-control']) }}
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