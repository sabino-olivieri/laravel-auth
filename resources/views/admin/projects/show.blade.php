@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h2>{{$project->title}}</h2>
            </div>
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{$project->image_url}}" alt="">
            </div>

            <div class="col-12 col-md-6">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong>Data inizio progetto:</strong> {{$project->start_date}}
                    </li>
                    <li class="mb-3">
                        <strong>Data fine progetto:</strong> {{$project->finish_date}}
                    </li>
                    <li class="text-truncate mb-3">
                        <strong>Link progetto:</strong> <a href="{{$project->site_url}}">{{$project->site_url}}</a>
                    </li>
                    <li class="mb-3">
                        <strong>Descrizione: </strong> {{$project->description}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection