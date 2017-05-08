@extends ('layouts.layout')

@section('content')
<h1>Create Article</h1>
<hr>
{!! Form::open(['url' => 'articles', 'method' => 'POST', 'files' => true]) !!}
<!-- treba da bidat sooedvotno so bazata kreirana formata -->
<!--niza so setinzi -> url kade da odi isto kako action i method -->
    @include('articles._form', ['buttonText' => 'Create Article'])
{!! Form::close() !!}
<!-- {{ var_dump($errors) }} -->
@include('parts._errors')
@endsection

@section('scripts')
<script>
$("#tags").select2();
</script>
@endsection
 <!-- selekt po id so # -->