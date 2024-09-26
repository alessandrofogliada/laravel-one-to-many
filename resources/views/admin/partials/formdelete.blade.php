<form action="{{ $route}}" method="POST" onsubmit="return confirm('{{$message}}')">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella" class="btn btn-danger">
  </form>