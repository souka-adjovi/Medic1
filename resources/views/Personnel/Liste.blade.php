
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
        <th scope="col">Profession</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
        </tr>
    </thead>
     <tbody>
        @foreach ($personnel as $item)
        <tr>
        <td>{{$item->nom}}</td>
        <td>{{$item->prenom}}</td>
        <td>{{$item->profession}}</td>
        <td>{{$item->telephone}}</td>
        <td> <a href=""> <button class="btn btn-primary"> Modifier</button></a> </td>
        <td><a href=""><button class="btn btn-danger">Supprimer</button></a></td>
        </tr>
        @endforeach
    </tbody>  
    </table>
    @endsection