@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger mt-3">
                {{session('error')}}
                
            </div>
        @endif

        <div class="card">
            <div class="card-header bg-info text-white">Ajouter un Candidat</div>
            <div class="card-body">
                <form action="{{ route('store.candidat') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date Naissance:</label>
                        <input type="date" name="dateNaissance" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Parti:</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="parti">
                            
                            <option selected>Open this select menu</option>
                            @foreach ($parti as $partis ) 
                            <option value="{{$partis->id}}" > {{ $partis->nom }} </option>
                            @endforeach
                            
                          </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection