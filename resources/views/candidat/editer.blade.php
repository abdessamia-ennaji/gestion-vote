@extends('layouts.app')
@section ('content')
    <div class="container ">
        @if (session ('success'))
            <div class="alert alert-success mt-3 ">
                {{session('success')}}
            </div>
        @endif

        <div class= "card">
            <div class="card-header bg-info text-white">Editer un Candidat </div>
                <div class="card-body ">
                    <form action="{{ route('update.candidat',$candidat->id)}}" method="post">
                        @csrf
                         <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name ="nom" id="" class="form-control"  value="{{$candidat->nom}}" >
                        </div>

                        <div class="form-group">
                            <label for="">prenom</label>
                            <input type="text" name ="prenom" id="" class="form-control" value="{{$candidat->prenom}}">
                        </div>


                        <div class="form-group">
                            <label for="">Date Naissance</label>
                            <input type="date" name ="dateNaissance" id="" class="form-control" value="{{$candidat->dateNaissance}}">
                        </div>

                        {{-- <div class="form-group">
                            <label for="">Parti</label>
                            <input type="text" name ="parti" id="" class="form-control" value="{{$candidat->parti}}">
                        </div> --}}
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="parti">
                            
                            <option selected>Open this select menu</option>
                            @foreach ($parti as $partis ) 
                            <option value="{{$partis->id}}" > {{ $partis->nom }} </option>
                            @endforeach
                            
                          </select>

                        <div class="form-group">
                            <button class="btn btn-success">Modifier</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
   </div>
@endsection