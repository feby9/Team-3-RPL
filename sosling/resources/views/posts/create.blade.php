@extends('layouts.app')

@section('content')

    <h1>Tawarkan Tempat Wisata</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Judul')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Nama tempat wisata'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Harga yang Anda Tawarkan')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'misal:1000000'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Deskripsi')}}
            {{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Deskripsi tempat wisata dan jasa yang Anda tawarkan'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
   
@endsection