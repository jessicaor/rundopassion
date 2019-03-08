@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inscriptions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="py-5 px-5" action="/inscrits/store" method="post">
                    {{csrf_field() }}
                    
                    <div class="form-group">
                        <label for="InputName">Nom*</label>
                        <input type="text" class="form-control {{$errors->has('name')?'is-invalid': ''}}" name ="name" id="InputTitle" placeholder="Title" value="">
                    </div>               
                    <!--<div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" class="form-control " name ="mail" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                    </div>-->
                    <div class="form-group">
                        <label for="InputName">Prenom*</label>
                        <input type="texte" class="form-control {{$errors->has('firstname')?'is-invalid': ''}}" name ="firstname" id="InputTitle" placeholder="Prenom" value="">
                    </div>     
                    <div class="form-group">
                        <label for="InputName">Age*</label>
                        <input type="text" class="form-control {{$errors->has('age')?'is-invalid': ''}}" name ="age" id="InputTitle" placeholder="Age" value="">ans
                    </div>               
                    <div class="form-group">
                        <label for="InputName">Téléphone*</label>
                        <input type="text" class="form-control {{$errors->has('phone')?'is-invalid': ''}}" name ="phone" id="InputTitle" placeholder="Telephone" value="">
                    </div>               

                    <div class="form-group">
                        <label for="FormControlTextarea">Message</label>
                        <textarea type="text" class="form-control " id="FormControlTextarea" rows="5" name="message"></textarea>
                    </div>

                    <div class="text-center pt-5">
                        <button id ="bouton_envoi" type="submit" name="bouton" onclick="" value ="Add" class="ok btn btn-lg btn-danger">S'inscrire</button>
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



