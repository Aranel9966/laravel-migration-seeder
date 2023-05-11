@extends('layouts/main-layout')
@section('content')
    <h1>treni</h1>

    @foreach ($tarin as $item)
    {{$item->Azienda}}
    {{$item->Stazione_di_partenza}}
    {{$item->Stazione_di_arrivo}}
    {{$item->Orario_di_partenza}}
    {{$item->Orario_di_arrivo}}
    {{$item->Codice_Treno}}
    {{$item->Numero_Carrozze}}
    {{$item->In_orario}}
    {{$item->Cancellato}}
        
    @endforeach
@endsection