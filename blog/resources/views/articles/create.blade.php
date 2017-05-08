@extends('layouts.layout')

@section('content')
<h1>CreateArticle</h1>
<h1></h1>
{!! Form::open(['url' => 'articles', 'method' => "POST", 'files'=> true]) !!}
   @include('articles._form', ['buttonText'=>'Create Article'])
   
{!! Form::close() !!}
@include('parts._errors')

@endsection
@section('scripts')
<script type="text/javascript">
$("#tags").select2();
</script>
@endsection