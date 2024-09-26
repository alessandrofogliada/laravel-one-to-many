@extends('layouts.app')

@section('content')

<h3>Qui è dove creiamo il nuovo post</h3>

<form action="{{ route('admin.posts.store')}}" method="POST">
@csrf

<label for="id">ID</label>
<input type="text" placeholder="inserisci numero id" name="id" id="id">

<label for="title">Titolo</label>
<input type="text" placeholder="inserisci titolo" name="title" id="title">

<label for="text">Testo</label>
<input type="text" placeholder="inserisci numero testo" name="text" id="text">

<label for="id">Tempo di lettura</label>
<input type="text" placeholder="inserisci il tempo di lettura" name="reading_time" id="reading_time">

<input type="submit" value="Invia">
</form>
    
@endsection