@extends('layouts.app')

@section('content')

<div class="container">

  <h1>Elenco post</h1>

  @if (session('delete'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
  @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo</th>
            <th scope="col">Tempo di lettura</th>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            <td>{{$post->reading_time}}</td>
            <td>{{$post->category->name}}</td>
            <td><a href="{{ route('admin.posts.show' , $post)}}" type="button" class="btn btn-warning">Dettagli</a>
            </td>
            <td><a href="{{ route('admin.posts.edit' , $post)}}" type="button" class="btn btn-info">Modifica</a></td>
            <td>
              @include('admin.partials.formdelete' , [
                'route'=>route('admin.posts.destroy' , $post),
                'message'=>"confermi di voler eleminare il post: . $post->title . ?",
              ])
            </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>

      {{$posts->links()}}


</div>
    
       
@endsection