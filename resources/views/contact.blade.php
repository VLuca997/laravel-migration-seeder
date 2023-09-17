@extends('layouts.layout')

@section('page-title', 'Contact')




@section('main-content')
        <div class="row">
            @foreach ($trains as $train )
                
                <div class="col-4 py-5 border p-0 rounded-4 mx-3 d-flex justify-content-between">
                    <ul class="list-unstyled px-3 ">
                        <li>Compagnia di trasporti:{{$train->company}}</li>
                        <li>Codice Treno:{{$train->code}}</li>
                        <li>Carrozza:{{$train->train_cars_number}}</li>
                        <li>in orario:@if ($train->in_time == 0)
                            <strong>Stiamo subento dei rallemntamenti</strong>
                            @else
                            <strong> Il treno è in perfetto orario</strong>
                        @endif</li>
                        <li>Partito Da:{{$train->dep_station}}</li>
                        <li>Verso:{{$train->arr_station}}</li>
                        <li>Data Partenza:{{$train->dep_timestamp}}</li>
                        <li>Data Rientro:{{$train->arr_timestamp}}</li>
                        <li>In orario:@if ($train->deleted == 0)
                            <strong> Il treno è in Arrivo</strong>
                        @else
                                <strong>Il Viaggio è stato annullato.</strong>
                        @endif</li>
                        
                    </ul>
                </div>
            @endforeach
        </div>

@endsection