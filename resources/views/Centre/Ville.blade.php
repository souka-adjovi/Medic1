
@extends('layouts/include')
<div class="d-flex row form-group mt-2">
  <div class="form-group col-md-11 text-center "> <br>
      <a href="{{url('/')}}"><button type="" class="btn btn-warning">Retour</button></a>
      </div>
      </div>

<div class="container">
    <form action="{{url('store-ville')}}" method="post">
        @csrf
    <h1 class="text-center">Ville</h1>
    <div class="form-group col-md-11">
    <label for="make">Numéro</label>
    <input type="number" name="numero" id="make" class="form-control">
    </div>
    <div class="form-group col-md-11">
    <label for="make">Nom</label>
    <input type="text" name="nom" id="make" class="form-control">
     </div>
    
          <div class="d-flex row form-group mt-2">
            <div class="form-group col-md-11 text-center "> <br>
             <button type="submit" class="btn btn-success ">Enrégistrer</button>
             <button type="reset" class="btn btn-danger ">Annuler</button>
            </div>
          </div>
          </form>
</div>