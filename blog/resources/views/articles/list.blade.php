@extends('layouts.layout')


@section('content')
 <h1 class="page-header">Articles</h1>
 @foreach($articles as $article)
 <article>
     <h2> <a href='#'> {{$article-> title}}
             
         </a>
         <div class='content'> {{ $article->body }} </div>
     </h2>
 </article>
 @endforeach
@endsection