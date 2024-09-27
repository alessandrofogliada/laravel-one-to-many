@extends('layouts.app')

@section('content')

<div>

        <h3>Qui è dove creiamo il nuovo post</h3>

        <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf

        <label for="id">ID</label>
        <input type="text" placeholder="inserisci numero id" name="id" id="id">
            <br>
        <label for="title">Titolo</label>
        <input type="text" placeholder="inserisci titolo" name="title" id="title">
            <br>
        <label for="text">Testo</label>
        <input type="text" placeholder="inserisci numero testo" name="text" id="text">
            <br>
        <label for="id">Tempo di lettura</label>
        <input type="text" placeholder="inserisci il tempo di lettura" name="reading_time" id="reading_time">
            <br>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category_id">
            <option value="disable">Seleziona una categoria</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        

        <input type="submit" value="Invia">
        </form>

</div>

    
@endsection