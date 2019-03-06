@extends('layouts.app')
@section('content')
<style>
            .editbut{
                margin-top:-10%;
            }

        </style>

<div class="container">
{{csrf_field() }}
    <h2>Randos</h2>
    @foreach($randos as $rando)
    <div class="row">
    <ul class="col-sm-6"><li>{{$rando->title}}</li>
    <p>{{$rando->date}}</p>
    <p>{{$rando->heure}}h</p>
    <p>{{$rando->distance}}km</p>
    <p>{{$rando->description}}</p></ul>

    <div class="text-center col-sm-2">
        @can('update', $rando)
    <a href="/randos/{{ $rando->id }}/edit" class="editbut">modifier</a>
    @endcan
    </div>

    <!--<div class="text-center col-sm-2">-->
    {{method_field('DELETE')}}
    <!--<a href="" class="destroybut" value="delete" name="_method" type="hidden">Supprimer</a>
    </div>-->


    <div class="text-center col-sm-2">
    <a href="/inscrits/create" class="editbut">S'inscrire</a>
    </div>

    </div>
    @endforeach
</div>
@endsection 