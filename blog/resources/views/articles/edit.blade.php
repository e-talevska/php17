@extends('layouts/layout')

@section('content')
<h1>Edit Article</h1>
<hr>
{!! Form::model($article, ['url' => 'articles/'.$article->id, 'method' => 'PATCH', 'files' => true]) !!}

<img src="{{asset('/uploads/'.$article->feature_image) }}">
@include('articles/_form', ['buttonText' => 'Edit Article'])
{!! Form::close() !!}
@include('parts/_errors')
@endsection

@section('scripts')
<script>
$("#tags").select2();
</script>
@endsection