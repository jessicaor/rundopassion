@extends('layouts.app')
@section('content')

<div class="container">
{{csrf_field() }}
    <h2>Articles</h2>
    @foreach($randos as $rando)
    <ul><li>{{$rando->title}}</li>
    <p>{{$rando->date}}</p>
    <p>{{$rando->heure}}</p>
    <p>{{$rando->distance}}</p>

    <p>{{$rando->description}}</p></ul>
    @endforeach
</div>
@endsection 