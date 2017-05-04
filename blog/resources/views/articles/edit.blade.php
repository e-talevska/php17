@extends ('layouts.layout')

@section('content')
<h1>Edit Article</h1>
<hr>
{!! Form::model($article,['url' => 'articles/'.$article->id, 'method' => 'PATCH', 'files' => true]) !!}
<!-- treba da bidat sooedvotno so bazata kreirana formata -->
<!--niza so setinzi -> url kade da odi isto kako action i method -->
<img src = "/uploads/{{ $article->featured_image }}" alt = "{{ $article->featured_image }}">
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}<!-- namesto null  $article->title  -->
        <!--<label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">-->
    </div>
    <div class="form-group">
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('excerpt', 'Excerpt') }}
        {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' =>3]) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Category') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
        <!--  value=id, vrednosta e samata vrednost od bazata -->
    </div>
    <div class="form-group">
        {{ Form::label('featured_image', 'Featured Image') }}
        {{ Form::file('featured_image', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('published_at', 'Published At') }}
        {{ Form::text('published_at', null, ['class' => 'form-control']) }}
    </div>

    <button type="submit" class="btn btn-primary">Edit Article</button>
{!! Form::close() !!}
<!-- {{ var_dump($errors) }} -->
@if($errors->any())
<ul class = "alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach  
</ul>
@endif
@endsection