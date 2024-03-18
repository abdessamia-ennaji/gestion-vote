@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <div class ="card">
            <div class ="card-header bg-info text-white">liste des Electeurs</div>
                <div class ="card-body"> 
                    <table class ="table">
                        <thead>
                            <tr>
                                <th scope="col">Id Electeur</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">CNI</th>
                                <th scope="col">Candidat Id</th>
                                <th scope="col">Nom de Candidat</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                    @if(!empty($electeur) && $electeur->count())
                            @foreach ($electeur as $electeurs )
                            <tr>
                                <td> {{ $electeurs->id }}</td>
                                <td> {{ $electeurs->nom }}</td>
                                <td> {{ $electeurs->prenom }}</td>
                                <td> {{ $electeurs->cni }}</td>
                                <td> {{ $electeurs->candidat_id }}</td>

                                
                                @foreach ($candidat as $candidats)
                                @if($candidats->id == $electeurs->candidat_id)
                                <td value="{{ $candidats->id }}" class="text-center">
                                        {{$candidats->nom ?? 'No name provided'}}
                                    @endif
                                @endforeach
                                </td> 
                                    
                                <td> 
                                    <a href="{{ route('edit-electeur',$electeurs->id) }}" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-electeur',$electeurs->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$electeur->links()}}
                    @else 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection