@extends('home')

@extends('layouts/include')

@section('dashboard')


<div class="d-flex row form-group mt-2">
    <div class="form-group col-md-11 text-center "> <br>
        <a href="{{url('/')}}"><button type="" class="btn btn-success w-40 ">Retour</button></a>
        </div>
        </div>

<table class="table table-borderer py-4">
    <thead>
        <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Numéro de CNIB</th>
        {{-- <th scope="col">Date de Naissance</th>
        <th scope="col">Antécedant Médicaux</th>
        <th scope="col">Personne à prévenir</th>
        <th scope="col">Groupe Sanguin</th> --}}
        <th scope="col">Télephone</th>
        <th scope="col">Adresse</th>
        {{-- <th scope="col">Genre</th>
        <th scope="col">Ordonne</th> --}}
        <th scope="col">Modifier</th>
        <th scope="col">Détail</th>
        <th scope="col">Supprimer</th>
        </tr>
    </thead>
     <tbody>
        @foreach ($patients as $patient)
        <tr>
        <td>{{$patient->nom}}</td> 
        <td>{{$patient->prenom}}</td>
        <td>{{$patient->numcnib}}</td>
        {{-- <td>{{$patient->dateDenaissance}}</td>
        <td>{{$patient->antecedantMedicaux}}</td>
        <td>{{$patient->personneAprevenir}}</td>
        <td>{{$patient->groupesanguin}}</td> --}}
        <td>{{$patient->telephone}}</td>
        <td>{{$patient->adresse}}</td>
        {{-- <td>{{$patient->genre}}</td>
        <td>{{$patient->ordonne}}</td> --}}
        <td> <a href="{{url('editer ?id=' .$patient->id)}}"> <button class="btn btn-primary"> Modifier</button></a> </td>
        <td><a href="{{url('detail?id='.$patient->id)}}"><button  class="btn btn-warning">Détail</button></a></td>
        <td><a href="{{url('supprimer?id='.$patient->id)}}"><button class="btn btn-danger">Supprimer</button></a></td>
        </tr>
        @endforeach
    </tbody>   
    </table>
    @endsection