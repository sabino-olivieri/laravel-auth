@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3 d-flex justify-content-between">
                <h2 class="m-0">{{ $project->title }}</h2> 
                <a class="btn btn-success" href="{{route('admin.project.edit', ['project' => $project->slug])}}"><i class="fa-solid fa-pen-to-square"></i></a>

            </div>
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{ asset('storage/'.$project->image) }}" alt="">
            </div>

            <div class="col-12 col-md-6">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong>Data inizio progetto:</strong> {{ $project->start_date }}
                    </li>
                    <li class="mb-3">
                        <strong>Data fine progetto:</strong> {{ $project->finish_date }}
                    </li>
                    <li class="text-truncate mb-3">
                        <strong>Link progetto:</strong> <a href="{{ $project->site_url }}" target="blank" class="text-white">{{ $project->site_url }}</a>
                    </li>
                    <li class="mb-3">
                        <strong>Descrizione: </strong> {{ $project->description }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @session('message')
        <div class="ms_toast ms_hidden bg-success rounded-2 shadow">
            {{ session('message') }} <i class="fa-regular fa-circle-check"></i>
            <div class="ms_line ms_hidden" > </div>
        </div>
        

        <script>

        </script>
    @endsession
@endsection
