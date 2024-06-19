@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="my-3">Aggiungi nuovo progetto</h2>
        <form action="{{route('admin.project.store')}}" method="post" class="text-center">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" placeholder="title" name="title" @error('title') {{old('title')}} @enderror>
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="image_url" placeholder="image_url" name="image_url" @error('image_url') {{old('image_url')}} @enderror>
                <label for="image_url">Link immagine</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="site_url" placeholder="site_url" name="site_url" @error('site_url') {{old('site_url')}} @enderror>
                <label for="site_url">Link sito</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="start_date" placeholder="start_date" name="start_date" @error('start_date') {{old('start_date')}} @enderror>
                <label for="start_date">Data inizio progetto</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="finish_date" placeholder="finish_date" name="finish_date" @error('finish_date') {{old('finish_date')}} @enderror>
                <label for="finish_date">Data fine progetto</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="description" id="floatingTextarea" name="description">@error('description') {{old('description')}} @enderror</textarea>
                <label for="floatingTextarea">Descrizione</label>
            </div>


            <button type="reset" class="btn btn-outline-danger">Cancella</button>
            <button type="submit" class="btn btn-outline-success">Aggiungi</button>

        </form>
    </div>
</div>
@endsection