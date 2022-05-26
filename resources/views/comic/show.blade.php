@extends('/app')

<div class="description m-3">
    <h3>Titolo: </h3>
    <p>{{ $comic->title }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

    <h2>
        Descrizione:
    </h2>
    {{ $comic->description }}
</div>

<div class="text-center">
    <a class=" bg-primary p-2 text-white text-decoration-none rounded-2" href="{{ route('comic.index') }}">BACK</a>

</div>
<form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
    @csrf

    sicuro?


    @method('DELETE')

    <input type="submit" value="Cancella">
</form>
