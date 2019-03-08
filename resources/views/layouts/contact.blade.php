@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pb-5">
            
                <div class="cont text-center"><h2 class="title_rundo">Contact</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                    <div class="text-center pt-2">
                    <h2>Si vous souhaitez en savoir plus sur les randonnées, me proposer de nouveaux circuit ou toutes autres informations, n'hésitez pas.</h2>
                   
                    <p class="pt-3 paracont">0692 01 23 45</p>
                    <p class="pt-2 paracont">guide@rundo.com</p>
                    </div>
                    <div class="d-flex justify-content-around pt-5">
                        <i class="fab fa-facebook-square fa-3x"><a href="#"></a></i>
                        <i class="fab fa-twitter-square fa-3x"><a href="#"></a></i>
                        <i class="fab fa-instagram fa-3x"><a href="#"></a></i>
                    </div>
                    </div>
                <!--<div class="text-center">
                 <h2>Pour tout renseignement n'hésitez pas à nous contacter</h2> 
                 <img src="/images/arrobab.png" alt="mail_icon" class="icon"> 
                 <p>contact_rundoP@gmail.com</p> 
                 <img src="/images/smartphoneb.png" alt="phone_icon" class="icon"> 
                 <p>0000 00 00 00</p>
                 <img src="/images/placeholderb.png" alt="placeholder_icon" class="icon"> 
                 <p>Notre siège se trouve au:</p> 
                    <p class="pb-5">quamquam te quidem video minime esse deterritum esse deterritum</p>

                </div>-->
            </div>
        </div>
    </div>
</div>
@endsection
