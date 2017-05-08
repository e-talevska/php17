@extends ('layouts.layout')

@section('content')
<h1>View Article {{ $article->title }}</h1>
<span>{{ $article->author->name }}</span><!-- bez name vraka cel objekt, vaka vraka specificno sto treba -->
<hr>
<div>{{ $article->body }}</div>
@endsection
<!-- author() ke se koristi kako metod -->