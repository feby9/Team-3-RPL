@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <h2>Harga: {{$post->price}}</h2>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
</br> </br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Ditulis pada {{$post->created_at}} oleh {{$post->user->name}}</small> </br>
</br>
    <small>Tertarik dengan penawaran ini? Kontak user melalui {{$post->user->email}} atau</small></br>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
        <a href="/form_pesanan" class="btn btn-warning">Pesan Sekarang</a>
        </div>
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection