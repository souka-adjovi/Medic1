@extends('layouts/include')
<div class="card-deck">
    <div class="card">
      <div class="card-deck">
        <div class="card">
         <img src="images/3.JPG" class="card-img-top" alt="..."> 
          <div class="card-body">
          <h5 class="card-title text-center">Détail du Patient {{$patient->nom}}</h5>
            <p class="card-text">Nom: {{$patient->nom}}</p>
            <p class="card-text">Prénom: {{$patient->prenom}}</p>
            <p class="card-text">Date de Naissance: {{$patient->dateDenaissance}}</p>
            <p class="card-text">Antécedants Médicaux: {{$patient->antecedantMedicaux}}</p>
            <p class="card-text">Numéro CNIB: {{$patient->numcnib}}</p>
            <p class="card-text">Personne à prévenir: {{$patient->personneAprevenir}}</p>
            <p class="card-text">Groupe Sanguin: {{$patient->groupesanguin}}</p>
            <p class="card-text">Téléphone: {{$patient->telephone}}</p>
            <p class="card-text">Adresse: {{$patient->adresse}}</p>
            <p class="card-text">Genre: {{$patient->genre}}</p>
            <p class="card-text">Ordonnance: {{$patient->ordonne}}</p> 
          </div>
           <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div> 
        </div>
  </div>