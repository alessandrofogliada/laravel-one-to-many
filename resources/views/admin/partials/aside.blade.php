{{-- qui è dove inseriremo tutto il codice per la barra verticale a sinistra  --}}

<aside class="text-bg-dark main-wrapper">
    <ul>
        <li><a href="{{ route('admin.dashboard')}}">Home</a></li>
        <li><a href="{{ route('admin.posts.index')}}">Elenco Posts</a></li>
        <li><a href="{{ route('admin.posts.create')}}">Nuovo Post</a></li> 
    </ul>
</aside>
