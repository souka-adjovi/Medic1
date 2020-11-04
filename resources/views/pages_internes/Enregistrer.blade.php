
@extends('home')
@extends('layouts/include')

@section('dashboard')
 
 <div class="d-flex row form-group mt-2">
    <div class="form-group col-md-11 text-center "> <br>
        <a href="{{url('/')}}"><button type="" class="btn btn-warning">Retour</button></a>
        </div>
        </div>
    <div class="container">
    <form class="" action="{{url('store-patient')}}" method="post" enctype="multipart/form-data">
               @csrf
               <h1 class="text-center">PATIENT</h1>
                     <div class="form-group col-md-11">
                            <label for="">Nom:</label>
                            <input type="text" name="nom" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="">Prénom:</label>
                        <input type="text" name="prenom" id="" class="form-control">
                    </div>
                       <div class="form-group col-md-11">
                           <label for="">Numéro CNIB:</label>
                           <input type="text" name="numcnib" id="" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                           <label for="model">Date de Naissance:</label>
                           <input type="date" name="dateDenaissance" id="model" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                         <label for="model">Antécedents Médicaux:</label>
                         <input type="text" name="antecedantMedicaux" id="model" class="form-control">
                       </div>
                     <div class="form-group col-md-11">
                         <label for="model">Personne à Prévenir:</label>
                         <input type="text" name="personneAprevenir" id="model" class="form-control">
                     </div>
                     <div class="form-group col-md-11">
                        <label for="model">Groupe Sanguin:</label>
                        <input type="text" name="groupesanguin" id="model" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Télephone:</label>
                        <input type="text" name="telephone" id="model" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Adresse:</label>
                        <input type="text" name="adresse" id="model" class="form-control">
                    </div>
               
                    <div class="form-group col-md-11">
                        <label for="model">Genre:</label>
                        <select name="genre" id="model" class="form-control">
                        <option value=""></option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        </select>
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Ordonnance:</label>
                        <input type="file" name="ordonne" id="model" class="form-control">
                    </div>
                    
                     <div class="d-flex row form-group mt-2">
                       <div class="form-group col-md-11 text-center "><br><br>
                           <button type="submit" class="btn btn-success w-40 ">Enrégistrer</button>
                           <button type="reset" class="btn btn-danger w-40">Annuler</button>
                       </div>
                   
                     </div>
    </form>
    </div>
     @endsection