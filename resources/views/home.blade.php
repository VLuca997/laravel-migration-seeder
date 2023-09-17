@extends('layouts.layout')

@section('page-title', 'home')

@section('main-content')
    <ul>
        @foreach ($trains as $train)
            <li>
                <div class="card">
                    <div class="card-body">
                        <h4>Nome Compagnia: {{$train->company}}</h4>
                        <h5>Codice Viaggio: {{$train->code}}</h5>
                        <h6>Vagone: {{$train->train_cars_number}}</h6>
                        <h5>Annullamento Viaggio:
                            @if ($train->deleted == 0)
                            <strong> Il treno è in Arrivo</strong>
                        @else
                                <strong>Il Viaggio è stato annullato.</strong>
                        @endif</h5>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection