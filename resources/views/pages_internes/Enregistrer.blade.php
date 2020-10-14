@extends('layouts/include')
    <div class="container">
    <form class="" action="{{url('Enregistrer')}}" method="post" enctype="multipart/form-data">
               @csrf
               <h1 class="text-center">PATIENT</h1>
               <div class="form-group col-md-11">
                <label for="make">Nom du Tuteur:</label>
                <select type="text" name="tuteur_id" id="make" class="form-control">
                    <option value="">Choisir le Tuteur</option>
                    {{-- @foreach ($tuteur as $item)
                <option value="{{$item->id}}">{{$item->nom}}</option>  
                    @endforeach --}}
                </select>
            </div>
                       <div class="form-group col-md-11">
                           <label for="make">Nom:</label>
                           <input type="text" name="nom" id="make" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                           <label for="model">Prénom:</label>
                           <input type="text" name="prenom" id="model" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                         <label for="model">Date de Naissance:</label>
                         <input type="date" name="dateNaissance" id="model" class="form-control">
                       </div>
                     <div class="form-group col-md-11">
                         <label for="model">Ville d'origine:</label>
                         <input type="text" name="villeDorigine" id="model" class="form-control">
                     </div>
                     <div class="form-group col-md-11">
                        <label for="model">Formation:</label>
                        <input type="text" name="formation" id="model" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Etablissement Précédent:</label>
                        <input type="text" name="etablissementPrecedent" id="model" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Télephone:</label>
                        <input type="text" name="telephone" id="model" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <label for="model">Email:</label>
                        <input type="text" name="email" id="model" class="form-control">
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
                        <label for="model">Photo:</label>
                        <input type="file" name="photo" id="model" class="form-control">
                    </div>
                    
                
                     {{-- </div>  --}}
                     <div class="d-flex row form-group mt-2">
                       <div class="form-group col-md-11 text-center "> <br>
                           <button type="submit" class="btn btn-success w-40 ">Enrégistrer</button>
                           <button type="reset" class="btn btn-danger w-40">Annuler</button>
                       </div>
                     </div>
    </form>
            </div>  