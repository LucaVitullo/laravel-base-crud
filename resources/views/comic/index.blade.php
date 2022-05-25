@extends('/app')
@section('content')
    <h1>Lista fumetti:</h1>
    <div class="d-flex flex-wrap justify-content-center gap-2">
        @foreach ($comics as $comic)
            <div class="card">
                <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>Titolo: </h3>
                <p>{{ $comic->title }}</p>
                <h5>Serie: {{ $comic->series }}</h5>
                <h3>Prezzo: </h3>
                <p>{{ $comic->price }}€</p>
                <h3>Data d'uscita: </h3>
                <p>{{ $comic->sale_date }}</p>
                <h3>Genere: </h3>
                <p>{{ $comic->type }}</p>
            </div>
        @endforeach
    </div>
@endsection()
