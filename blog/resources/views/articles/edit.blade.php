@extends('layouts\layout')

@section('content')
<h2>Edit Article</h2>
<hr>
{!! Form::model($article, ['url' => 'articles/'.$article->id,'method' => 'PATCH','files' => true]) !!}
   
    <image width='50%' src="{{ asset('/uploads/'.$article->feature_image) }}" alt='{{$article->feature_image }}'>
    
    @include('articles._form',['buttonText' => 'Edit Article'])
{!! Form::close() !!}

@include('parts._errors')

@endsection

@section('scripts')
<script type="text/javascript">
    $("#tags").select2();
</script>
@endsection