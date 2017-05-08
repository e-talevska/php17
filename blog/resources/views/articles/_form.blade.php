 <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', null, ['class'=>'form-control'])}}
                
  </div>
            <div class="form-group">
                        {{Form::label('slug', 'Slug')}}
                        {{Form::text('slug', null, ['class'=>'form-control'])}}

              </div>
                <div class="form-group">
                                        {{Form::label('excerpt', 'Excerpt')}}
                                        {{Form::textarea('excerpt', null, ['class'=>'form-control', 'rows'=>3])}}

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
                                        {{Form::label('tag', 'Tag')}}
                                        {{Form::select('tag[]', $tags, null, ['class'=>'form-control', 'multiple'=>true, 'id'=>'tags'])}}

                              </div>
              <div class="form-group">
                {{Form::label('feature_image', 'Feature_image')}}
                {{Form::file('feature_image', ['class'=>'form-control'])}}
                
  </div>
            <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>