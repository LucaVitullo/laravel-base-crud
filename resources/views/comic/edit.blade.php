@extends('/app')


<form action="{{ route('comic.update', $comic->id) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="content d-flex justify-content-center">
        <div class="m-3">
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $comic->title }}" />

        </div>
        <div class="m-3">
            <label for="description">Description:</label>
            <input type="description" name="description" value="{{ $comic->description }}" />
        </div>

        <div class="m-3">
            <label for="thumb">Thumb:</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}" />
        </div>
        <div class="m-3">
            <label for="price">price:</label>
            <input type="text" name="price" value="{{ $comic->price }}" />
        </div>
        <div class="m-3">
            <label for="series">series:</label>
            <input type="text" name="series" value="{{ $comic->series }}" />
        </div>
        <div class="m-3">
            <label for="sale_date">sale_date:</label>
            <input type="text" name="sale_date" value="{{ $comic->sale_date }}" />
        </div>
        <div class="m-3">
            <label for="type">type:</label>
            <input type="text" name="type" value="{{ $comic->type }}" />
        </div>
    </div>


    <div class="text-center">
        <button class="m-3 text-white bg-success border-0 px-4 rounded-2" type="submit">INVIA</button>
    </div>
</form>
