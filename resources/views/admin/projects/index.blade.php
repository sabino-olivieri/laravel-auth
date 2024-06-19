@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="my-3">Lista progetti</h2>
        <div class="container-table mb-3">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sito</th>
                        <th scope="col">Data inizio</th>
                        <th scope="col">Data fine</th>
                        <th scope="col">Azioni</th>
    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projectList as $project)
                    <tr>
                        <td><img src="{{$project->image_url}}" alt=""></td>
                        <th scope="row">{{$project->title}}</th>
                        <td class="site"><a href="{{$project->site_url}}">{{$project->site_url}}</a></td>
                        <td>{{$project->start_date}}</td> 
                        <td>{{$project->finish_date}}</td>
                        <td><button>Prova</button></td>
                    </tr>
                        
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
@endsection
