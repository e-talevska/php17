@extends('layouts.layout')

@section('content')
<h1>Create Article</h1>
<h1></h1>
{!! Form::open(['url' => 'articles', 'method' => "POST"] !!}
   
    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', null, ['class'=>'form-control'])}}
                
  </div>
            <div class="form-group">
                        {{Form::label('slug', 'Slug')}}
                        {{Form::text('slug', null, ['class'=>'form-control'])}}

              </div>
            <div class="form-group">
                        {{Form::label('body', 'content')}}
                        {{Form::text('body', null, ['class'=>'form-control'])}}

              </div>
            <div class="form-group">
                        {{Form::label('published_at', 'Published_at')}}
                        {{Form::text('published_at', null, ['class'=>'form-control'])}}

              </div>
                <div class="form-group">
                                        {{Form::label('category_id', 'Category')}}
                                        {{Form::select('category_id', $categories, null, ['class'=>'form-control'])}}

                              </div>
              <div class="form-group">
                {{Form::label('feature_image', 'Feature_image')}}
                {{Form::file('feature_image', ['class'=>'form-control'])}}
                
  </div>
            <button type="submit" class="btn btn-primary">Create Article</button>
{!! Form::close() !!}

@endsection