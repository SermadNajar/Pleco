@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">

        @if(count($bids) > 0)

        <div class="col-lg-12">
            <h1>Browse Bids</h1>
        </div>


        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Proposal details</th>
                    <th>Amount bidded</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Post link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bids as $bid)
                <tr>
                    <td>{{$bid->id}}</td>
                    <td>{{$bid->author}}</td>
                    <td>{{$bid->email}}</td>
                    <td>{!! Str::limit($bid->body, 7) !!}</td>
                    <td>{{$bid->bid}}</td>
                    <td>{{$bid->created_at->diffForhumans()}}</td>
                    <td>{{$bid->updated_at->diffForhumans()}}</td>
                    <td><a href="{{route('home.post', $bid->post->id)}}">View offer</a></td>
                    <td>
                        @if($bid->is_active == 1)

                        {!!Form::open(['method'=>'PATCH', 'action'=> ['PostBidsController@update', $bid->id]])!!}
                        <input type="hidden" name="is_active" value="0">
                        <div class="form-group">
                            {!!Form::submit('Un-approve', ['class'=>'btn btn-info'])!!}
                        </div>
                            {!!Form::close()!!}

                        @else
                        {!!Form::open(['method'=>'PATCH', 'action'=> ['PostBidsController@update', $bid->id]])!!}
                        <input type="hidden" name="is_active" value="1">
                        <div class="form-group">
                            {!!Form::submit('Aprove', ['class'=>'btn btn-success'])!!}
                        </div>
                            {!!Form::close()!!}
                        @endif
                        
                    </td>
                    <td>
                        {!!Form::open(['method'=>'DELETE', 'action'=> ['PostBidsController@destroy', $bid->id]])!!}
                        <div class="form-group">
                            {!!Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
                        </div>
                            {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @else

        <div class="col-lg-12">
            <h1>No Bids</h1>
        </div>
    

        @endif
    </div>
</div>

@endsection
@section('scripts')
@parent

@endsection