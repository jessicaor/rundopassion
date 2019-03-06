@extends('layouts.app')
@section('content')
<style>
            .editbut{
                margin-top:-10%;
            }

        </style>

<div class="container">
{{csrf_field() }}
    <h2 class="title_rundo text-center">Randos</h2>
       
  
    @can('create', App\Rando::class) 
    <a href="{{ url('/randos/create') }}" class="btn btn-danger btn-lg createbut">create</a>
    
    @endcan
   
    @foreach($randos as $rando)
    <div class="text-center pt-5">
    </div>

    <div class="row">
    <ul class="col-sm-6"><li class="list-unstyled font-weight-bold">{{$rando->title}}</li>
    <p>{{$rando->date}}</p>
    <p>{{$rando->heure}}h</p>
    <p>{{$rando->distance}}km</p>
    <p>{{$rando->description}}</p></ul>

    <div class="text-center col-sm-2">
    @can('update', $rando)
    <a href="/randos/{{ $rando->id }}/edit" class="btn btn-light btn-lg editbut">modifier</a>
    @endcan
    </div>

    <!--<div class="text-center col-sm-2">-->
    {{method_field('DELETE')}}
    <!--<a href="" class="destroybut" value="delete" name="_method" type="hidden">Supprimer</a>
    </div>-->


    <div class="text-center col-sm-2">
    <a href="/inscrits/create" class="btn btn-light btn-lg subbut">S'inscrire</a>
    </div>

    </div>
    @endforeach
</div>
@endsection 