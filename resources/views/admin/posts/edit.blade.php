@extends('layouts.admin')


@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <h1>Edit Post</h1>
        
        {!!Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true])!!}

            <div class="form-group">
                {!!Form::label('title', 'Title:')!!}
                {!!Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!!Form::label('category_id', 'Category:')!!}
                {!!Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!!Form::label('body', 'Description:')!!}
                {!!Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3])!!}
            </div>

            <div class="form-group">
                {!!Form::label('price', 'Budget:')!!}
                {!!Form::number('price', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-control">
                {!!Form::label('photo_id', 'Photo:')!!}
                {!!Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>
                
            <div class="form-group">
                {!!Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
            </div>

            {!!Form::close()!!}


    <div class="row">
            @include('partials.form_error')
    </div>
            
@stop