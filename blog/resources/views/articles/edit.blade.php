@extends ('layouts.layout')

@section('content')
<h1>Edit Article</h1>
<hr>
{!! Form::model($article,['url' => 'articles/'.$article->id, 'method' => 'PATCH', 'files' => true]) !!}
<!-- treba da bidat sooedvotno so bazata kreirana formata -->
<!--niza so setinzi -> url kade da odi isto kako action i method -->
<img src = "/uploads/{{ $article->featured_image }}" alt = "{{ $article->featured_image }}">
     @include('articles._form', ['buttonText' => 'Edit Article'])
{!! Form::close() !!}
<!-- {{ var_dump($errors) }} -->
@include('parts._errors')
@endsection