
@extends('layouts/include')
<div class="container">

    
    <form action="{{url('store')}}" method="post">
        @csrf
    <h1 class="text-center">Centre</h1>
    <div class="form-group col-md-11">
    <label for="make">Ville</label>
    <select  name="ville_id" id="make" class="form-control">
        
        <optgroup>
            @foreach ($villes as $ville)
            <option value=""></option>
            <option value="{{$ville->id}}">{{$ville->nom}}</option>
            @endforeach
        </optgroup>
    </select>
    </div>
    <div class="form-group col-md-11">
    <label for="make">Nom</label>
    <input type="text" name="nom" id="make" class="form-control">
     </div>
     <div class="form-group col-md-11">
        <label for="make">Télephone</label>
        <input type="number" name="telephone" id="make" class="form-control">
         </div>
         <div class="form-group col-md-11">
            <label for="make">Adresse</label>
            <input type="text" name="adresse" id="make" class="form-control">
             </div>
    
          <div class="d-flex row form-group mt-2">
            <div class="form-group col-md-11 text-center "> <br>
             <button type="submit" class="btn btn-success ">Enrégistrer</button>
             <button type="reset" class="btn btn-danger ">Annuler</button>
            </div>
          </div>
          </form>
</div>