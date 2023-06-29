@extends('layouts.app')

@section('content')


    <table class="table mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Numero carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        
        @foreach ($trains as $train)
            <tbody>
                <tr>
                    <td>{{ $train->id }}</td>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    
                    @if ($train->in_orario == 0) 
                        <td>Si</td>
                      @else
                        <td>No</td>
                    
                    @endif
                    
                    @if ($train->cancellato == 0)
                        <td>No</td>
                    @else 
                        <td>Si</td>
                    
                    @endif

                </tr>
            </tbody>
        @endforeach
        
    </table>
@endsection