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
                    <form action="{{ route('update.electeur',$electeur->id)}}" method="post">
                        @csrf
                         <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name ="nom" id="" class="form-control"  value="{{$electeur->nom}}" >
                        </div>

                        <div class="form-group">
                            <label for="">prenom</label>
                            <input type="text" name ="prenom" id="" class="form-control" value="{{$electeur->prenom}}">
                        </div>


                        <div class="form-group">
                            <label for="">CNI</label>
                            <input type="number" name ="cni" id="" class="form-control" value="{{$electeur->cni}}">
                        </div>

                        <div class="form-group">
                            <label for="">candidat Id</label>
                            {{-- <input type="text" name ="candidat_id" id="" class="form-control" value="{{$electeur->candidat_id}}"> --}}
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="candidat_id">
                            
                                <option selected>Open this select menu</option>
                                @foreach ($candidat as $candidats ) 
                                <option value="{{$candidats->id}}" > {{ $candidats->nom }} </option>
                                @endforeach
                                
                              </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Modifier</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
   </div>
@endsection