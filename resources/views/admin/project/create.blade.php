@extends('layouts.app')

@section('content')
    <div class="container py-5 px-5">
        <h1 class="text-center p-3 text-danger bg-dark">Crea il tuo project</h1>

        <form action="{{ route('admin.projects.store') }}">
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Inserisci titolo</label>
                <input type="text" class="form-control border border-black opacity-50" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Inserisci descrizione</label>
                <textarea class="form-control border border-black opacity-50" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 col-5">
                <label for="formFileMultiple" class="form-label">Inserisci immagine</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <button type="submit" class="btn btn-outline-success px-4 my-4">Crea</button>
        </form>
    </div>
@endsection
