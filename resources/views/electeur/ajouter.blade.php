@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-info text-white">Ajouter un Electeur</div>
            <div class="card-body">
                <form action="{{ route('store.electeur') }}" method="post">
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
                        <label for="">CNI:</label>
                        <input type="number" name="cni" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Candidat Id:</label>

                        {{-- <input type="text" name="candidat_id" id="" class="form-control"> --}}

                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="candidat_id">
                            
                            <option selected>Open this select menu</option>
                            @foreach ($candidat as $candidats ) 
                            <option value="{{$candidats->id}}" > {{ $candidats->nom }} </option>
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