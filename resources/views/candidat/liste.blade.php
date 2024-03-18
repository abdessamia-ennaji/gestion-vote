@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <div class ="card">
            <div class ="card-header bg-info text-white">liste des candidact</div>
                <div class ="card-body"> 
                    <form action="{{ route('liste.candidat') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Date Naissance</th>
                            <th scope="col">ID Parti</th>
                            <th scope="col">Nom de Parti</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($candidat as $candidats )
                        <tr>
                            <td> {{ $candidats->id }}</td>
                            <td> {{ $candidats->nom }}</td>
                            <td> {{ $candidats->prenom }}</td>
                            <td> {{ $candidats->dateNaissance }}</td>
                            <td> {{ $candidats->parti }}</td>
                            
                            @foreach ($parti as $partis)
                            @if($partis->id == $candidats->parti)
                            <td value="{{ $partis->id }}" class="text-center">
                                    {{$partis->nom ?? 'No name provided'}}
                                @endif
                            @endforeach
                            </td> 

                            <td> 
                                <a href="{{ route('edit-candidat',$candidats->id) }}" class ="btn btn-warning" >Editer</a>
                                <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-candidat',$candidats->id )}}" class ="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$candidat->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection