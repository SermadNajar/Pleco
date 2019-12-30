@extends('layouts.blog-post')

@section('content')



        <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                by <a href="{{'/admin/posts'}}">{{$post->user->name}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForhumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img width="70%" class="img-responsive" src="{{$post->photo->file}}" alt="">

                <hr>

                <!-- Post Content -->
                <p>{{$post->body}}</p>
                <hr>

                @if(Session::has('bid_flash'))

                    {{session('bid_flash')}}

                @endif

                <!-- Blog Comments -->
                @if(Auth::check())

                <!-- Comments Form -->
                <div class="well">
                    <h4>Place a Bid on this Project</h4>
                    {!!Form::open(['method'=>'POST', 'action'=> 'PostBidsController@store'])!!}

                      <input type="hidden" name="post_id" value="{{$post->id}}">

                    <div class="form-group">
                        {!!Form::label('body', 'Describe your proposal')!!}
                        {!!Form::textarea('body', null, ['class'=>'form-control', 'rows'=>1, 'placeholder' =>'What makes you the best candidate for this project?'])!!}

                        {!!Form::label('bid', 'Bid Amount')!!}
                        {!!Form::number('bid', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::submit('Submit your proposal', ['class'=>'btn btn-primary'])!!}
                    </div>

                </div>

                <hr>
                @endif
                <!-- Posted bids -->
                @if(count($bids) > 0)

                    @foreach($bids as $bid)
                        
                   
                
                <!-- Bids -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">{{$bid->author}}
                            <small>{{$bid->created_at->diffForHumans()}}</small>
                        </h4>
                        <p>{{$bid->body}}</p>
                    </div>
                </div>
                @endforeach
                @endif
@stop