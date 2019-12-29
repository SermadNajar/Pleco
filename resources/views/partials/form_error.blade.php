@if(count($errors) > 0)

<div class="alert">
    <ul>
        @foreach($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif