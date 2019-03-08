@extends('layouts.app')
@section('content')
<style>
            .editbut{
                margin-top:-10%;
            }

        </style>

<div class="container">
{{csrf_field() }}
    <h2 class="title_rundo text-center">Randonnées</h2>
       
  
    @can('create', App\Rando::class) 
    <a href="{{ url('/randos/create') }}" class="btn btn-danger btn-lg createbut">create</a>
    
    @endcan
   
    @foreach($randos as $rando)
    <div class="row">
    <ul class="col-sm-6">
    <div class ="row">
    <img src="/images/placeholderb.png" alt="date_icon" class="title_index_icon">
    <li class="list-unstyled font-weight-bold pb-5 pt-4">{{$rando->title}}</li>
    </div>
    <div class ="row col-sm-6">
    <img src="/images/calendarb.png" alt="date_icon" class="index_icon mr-5">
    <li class="list-unstyled"><p>{{$rando->date}}</p></li>
    </div>
    <div class ="row col-sm-6">
    <img src="/images/clockb.png" alt="date_icon" class="index_icon mr-5">
    <li class="list-unstyled"><p>{{$rando->heure}}h</p></li>
    </div>
    <div class ="row col-sm-6">
    <img src="/images/mapb.png" alt="date_icon" class="index_icon mr-5">
    <li class="list-unstyled"><p>{{$rando->distance}}km</p></li>
    </div>
    
    <li class="list-unstyled"><p>{{$rando->description}}</p></li></ul>
    
    <div class="text-center col-sm-2 pt-5">
    @can('update', $rando)
    <a href="/randos/{{ $rando->id }}/edit" class="btn btn-light btn-lg editbut">modifier</a>
    @endcan
    </div>

    <!--<div class="text-center col-sm-2">-->
    {{method_field('DELETE')}}
    <!--<a href="" class="destroybut" value="delete" name="_method" type="hidden">Supprimer</a>
    </div>-->
    <div class="text-center col-sm-2 pt-5">
    <a href="/inscrits/create" class="btn btn-light btn-lg subbut">S'inscrire</a>
    </div>

    </div>
    @endforeach

    <div class="container py-5"> 
          <h2 class="infos_title">Informations Utiles</h2>

          <p> Voici une liste de matériel incontournable pour votre confort et sécurité à la journée :  - vêtements légers (short + T-shirt) - chaussures de marche légères - protections solaires (lunette, chapeau, crème) - 1 polaire - 1 pantalon pour le soir ou durant l'hiver - 1 veste de pluie et coupe vent - 1.5L d'eau minimum par personne - le pique nique du midi si celui ci n'est pas compris dans la prestation  - maillot de bain et serviette selon le circuit - de l'argent liquide pour vos éventuels achats sur le circuit - votre carte d'identité et carte vitale   </p>

            <h3 class="infos_title">Règlement</h3>
          <p> Le règlement se fait en chèque ou en espèce. Bien souvent, un acompte de 30% du montant vous ait demandé afin de valider votre prestation. Le remboursement intégral a lieu uniquement en cas de mauvaise météo, de problème logistique de ma part (invalidité, pb de transport, imprévu...) ou une raison valable de votre part (certificat médical, justificatif professionnel, ...). Pour toute autre raison, je conserve l'acompte.   </p>

    </div>
</div>
@endsection 