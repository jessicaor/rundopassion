@extends('layouts.app')
@section('content')
<!--connectedUser-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue sur RundoPassion</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connectés!

                    <p><span class="font-weight-bold">RundoPassion</span> vous souhaite une bonne navigation</p>
                    <a href="/rundopassion" class="btn btn-lg">Rencontrez nous</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
