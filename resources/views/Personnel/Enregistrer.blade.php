
@extends('home')
@extends('layouts/include')
@section('dashboard')

  <div class="container">
      <div class="d-flex row form-group mt-2">
        <div class="form-group col-md-11 text-center "> <br>
            <a href="{{url('/')}}"><button type="" class="btn btn-warning">Retour</button></a>
            </div>
            </div>
    <form action="{{url('store-personnel')}}" method="post">
      
               @csrf
               <h1 class="text-center">Personnel</h1>
                        <div class="form-group col-md-11">
                        <label for="make">Numéro matricule</label>
                        <input type="text" name="Nummatricule" id="make" class="form-control">
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
                         <label for="model">Fonction:</label>
                         <select type="text" name="fonction" id="model" class="form-control">
                          <option value=""></option>
                          <option value="medecin">Médécin</option>
                          <option value="sagefemme">Sage Femme</option>
                          <option value="infirmiere">Infirmière</option>
                          <option value="assistantmedical">Assistant Médical</option>
                          </select>
                        </div>
                     <div class="form-group col-md-11">
                         <label for="model">Centre:</label>
                         <select  name="centre_id" id="make" class="form-control">
                          <optgroup>
                            <option value=""></option>
                              @foreach ($centre as $centres)
                            <option value="{{$centres->id}}">{{$centres->nom}}</option>
                              @endforeach
                          </optgroup>
                          </select>
                                           
                     </div>
                     <div class="form-group col-md-11">
                      <label for="model">Date de Naissance:</label>
                      <input type="date" name="dateDenaissance" id="model" class="form-control">
                  </div>
                  <div class="form-group col-md-11">
                    <label for="model">Téléphone:</label>
                    <input type="number" name="telephone" id="model" class="form-control">
                </div>
                    <div class="d-flex row form-group mt-2">
                       <div class="form-group col-md-11 text-center "> <br>
                        <button type="submit" class="btn btn-success ">Enrégistrer</button>
                        <button type="reset" class="btn btn-danger ">Annuler</button>
                       </div>
                     </div>
             </form>
            </div>  
            @endsection
 