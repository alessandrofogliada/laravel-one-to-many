@extends('layouts.app')

@section('content')

<h1>Dettaglio del post</h1> 

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h3>Id: {{$post->id}}</h3>
        <h3>Title: {{$post->title}}</h3>
        <h3>Text: {{$post->text}}</h3>
        <h3>Tempo di lettura: {{$post->reading_time}}</h3>
    </div>
  </div>


    
@endsection