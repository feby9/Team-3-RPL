@extends('layouts.app')
@section('content')
    <h1>Daftar Wisata</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md">
                            <h3><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h3>
                            <h3>Harga: {{$post->price}}</h3>
                            <small>Ditulis pada {{$post->created_at}} oleh {{$post->user->name}}</small>
                        </br>
                            <small>Tertarik dengan penawaran ini? Kontak user melalui {{$post->user->email}}</small>    
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection