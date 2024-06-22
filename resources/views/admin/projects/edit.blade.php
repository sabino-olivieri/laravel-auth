@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="my-3">Modifica progetto: {{$project->title}}</h2>
        <form action="{{route('admin.project.update', ['project' => $project->slug])}}" method="post" class="text-center mb-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input type="text" class="form-control ms_form-control" id="title" placeholder="title" name="title"  value="{{old('title', $project->title)}}"  required>
                <label for="title">Title</label>
            </div>
            @error('title')
            <div class="alert alert-danger">
                {{ $errors->get('title')[0] }}
            </div>
            @enderror

            <div class="form-floating mb-3">
                <input type="text" class="form-control ms_form-control" id="site_url" placeholder="site_url" name="site_url" value="{{old('site_url', $project->site_url)}}">
                <label for="site_url">Link sito</label>
            </div>
            @error('site_url')
            <div class="alert alert-danger">
                {{ $errors->get('site_url')[0] }}
            </div>
            @enderror

            <div class="form-floating mb-3">
                <input type="date" class="form-control ms_form-control" id="start_date" placeholder="start_date" name="start_date" value="{{old('start_date', $project->start_date)}}">
                <label for="start_date">Data inizio progetto</label>
            </div>
            @error('start_date')
            <div class="alert alert-danger">
                {{ $errors->get('start_date')[0] }}
            </div>
            @enderror

            <div class="form-floating mb-3">
                <input type="date" class="form-control ms_form-control" id="finish_date" placeholder="finish_date" name="finish_date" value="{{old('finish_date', $project->finish_date)}}">
                <label for="finish_date">Data fine progetto</label>
            </div>
            @error('finish_date')
            <div class="alert alert-danger">
                {{ $errors->get('finish_date')[0] }}
            </div>
            @enderror

            <div class="form-floating mb-3">
                <textarea class="form-control ms_form-control" placeholder="description" id="floatingTextarea" name="description">{{old('description', $project->description)}}</textarea>
                <label for="floatingTextarea">Descrizione</label>
            </div>
            @error('description')
            <div class="alert alert-danger">
                {{ $errors->get('description')[0] }}
            </div>
            @enderror

            <input type="file" class="form-control ms_form-control mb-3 ms_file" id="image" placeholder="image" name="image" value="{{old('image', asset('storage/'.$project->image))}}" id="ms_file" required>
                    
            @error('image')
            <div class="alert alert-danger">
                {{ $errors->get('image')[0] }}
            </div>
            @enderror

            <img id="anteprimaImmagine" class="img-fluid d-block w-25 m-auto mb-3" src="{{asset('storage/'.old('image', $project->image))}}">


            <button type="submit" class="btn btn-outline-success">Salva</button>

        </form>
    </div>
</div>
@endsection