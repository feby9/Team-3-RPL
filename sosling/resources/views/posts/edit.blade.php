@extends('layouts.app')

@section('content')

    <h1>Edit Postingan Anda/h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Judul')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Nama tempat wisata'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Harga yang Anda Tawarkan')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'misal:1000000'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Deskripsi')}}
            {{Form::textarea('body', $post->body, ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Deskripsi tempat wisata dan jasa yang Anda tawarkan'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
   
@endsection