@extends('layouts.app')

@section('content')
<h1 class="text-center">TRENI</h1>
<div class="container">

    <div class="row">
        @foreach ($trains as $train)
            <div class="col-3 my-5">
                <!-- inizio card  -->
                <div class="cardContainer p-3 rounded">
                    <h5 class="card-title pb-5">Treno{{$train->id}}</h5>
                    <p><strong>Azienda: </strong>{{$train->Azienda}}</p>
                    <p><strong>Partenza: </strong>{{$train->Stazione_di_partenza}}</p>
                    <p><strong>Arrivo: </strong>{{$train->Stazione_di_arrivo}}</p>
                    <p><strong>Orario di Partenza: </strong>{{$train->Orario_di_partenza}}</p>
                    <p><strong>Orario di Arrivo: </strong>{{$train->Orario_di_arrivo}}</p>
                    <p><strong>Codice Treno: </strong>{{$train->Codice_Treno}}</p>
                    <p><strong>Numero di carrozze: </strong>{{$train->Numero_Carrozze}}</p>
                    <p><strong>In orario: </strong>{{$train->In_orario}}</p>
                    <p><strong>Cancellato: </strong>{{$train->Cancellato}}</p>


                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection