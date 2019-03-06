@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Randos Creation</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="py-5 px-5" action="/randos/{{$rando->id}}" method="post">
                    {{csrf_field() }}
                    {{method_field('PUT')}}

                    <div class="form-group">
                        <label for="InputName">Title</label>
                        <input type="text" class="form-control {{$errors->has('title')?'is-invalid': ''}}" name ="title" id="InputTitle" placeholder="Title" value="{{old('title')}}">
                    </div>               
                    <!--<div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" class="form-control " name ="mail" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                    </div>-->
                    <div class="form-group">
                        <label for="InputName">Date</label>
                        <input type="date" class="form-control {{$errors->has('date')?'is-invalid': ''}}" name ="date" id="InputTitle" placeholder="Date" value="{{$rando->date}}">
                    </div>     
                    <div class="form-group">
                        <label for="InputName">Heure</label>
                        <input type="text" class="form-control {{$errors->has('heure')?'is-invalid': ''}}" name ="heure" id="InputTitle" placeholder="Heure" value="{{$rando->heure}}">h
                    </div>               
                    <div class="form-group">
                        <label for="InputName">Distance</label>
                        <input type="text" class="form-control {{$errors->has('distance')?'is-invalid': ''}}" name ="distance" id="InputTitle" placeholder="Distance" value="{{$rando->distance}}">km
                    </div>               

                    <div class="form-group">
                        <label for="FormControlTextarea">Description</label>
                        <textarea type="text" class="form-control " id="FormControlTextarea" rows="5" name="description"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check" name="published">
                        <label class="form-check-label" for="check">published</label>
                    </div>

                    <div class="text-center pt-5">
                        <button id ="bouton_envoi" type="submit" name="bouton" onclick="" value ="Add" class="ok btn btn-lg btn-danger">Modifier</button>
                    </div>
                    
                    @if($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                            {{ $errors->first('title') }}
                        </span>
                    @endif


                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 



