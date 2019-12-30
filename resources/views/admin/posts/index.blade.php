@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <h1>Browse Leads</h1>
        </div>

        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Budget</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'Https://pleco.io/Pleconew.png' }}" alt=""></td>
                    <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{!! Str::limit($post->title, 10) !!}</td>
                    <td>{!! Str::limit($post->body, 7) !!}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                    <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="col-lg-12">
    <a href="{{ route('posts.create') }}" class="btn btn-primary rounded">Create Post</a>
</div>

@endsection
@section('scripts')
@parent

@endsection