@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            Browse Posts
        </div>

        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>body</th>
                    <th>Budget</th>
                    <th>Photo</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->photo_id}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>


    <div class="col-lg-12">
        <a href="{{ route('posts.create') }}" class="btn btn-primary rounded">Create Post</a>
    </div>
</div>

@endsection
@section('scripts')
@parent

@endsection