@extends('layouts/main-layout')
@section('content')
    <h1>Treni</h1>
    
    <table class="table">
    <thead>
        <th>Azienda</th>
        <th>Stazione di partenza </th>
        <th>Stazione di arrivo</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>
    </thead>
        <tbody>
            @foreach ($tarins as $item)
                <tr>
                    <td>
                        {{$item->Azienda}}
                    </td>
                    <td>
                        {{$item->Stazione_di_partenza}}
                    </td>
                    <td>
                        {{$item->Stazione_di_arrivo}}
                    </td>
                    <td>
                        {{$item->Orario_di_partenza}}
                    </td>
                    <td>
                        {{$item->Orario_di_arrivo}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


