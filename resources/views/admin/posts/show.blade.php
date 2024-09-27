@extends('layouts.app')

@section('content')

<div>
  <h1>Dettaglio del post</h1> 

  <div class="card" style="width: 18rem;">
      <div class="card-body">
          <strong >Id:</strong>{{$post->id}}
          <br>
          <strong>Title:</strong>{{$post->title}}
          <br>
          <strong>Text:</strong>{{$post->text}}
          <br>
          <strong>Tempo di lettura:</strong>{{$post->reading_time}}
          <br>
          <strong class="badge bg-primary">Categoria: {{$post->category->name}}</strong>
      </div>
    </div>
</div>

    
@endsection