@extends('layouts\layout')

@section('content')
<h2>Create Article</h2>
<hr>
{!! Form::open(['url' => 'articles','method' => 'POST','files' => true]) !!}
    @include('articles._form',['buttonText' => 'Create Article'])
{!! Form::close() !!}

@include('parts._errors')

@endsection

@section('scripts')
<script type="text/javascript">
    $("#tags").select2();
</script>
@endsection