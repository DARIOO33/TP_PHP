@extends('t1')

@section('titre')
    Les épreuves
@endsection

@section('contenu')
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($epreuves as $epreuve)
                <tr>
                    <td>{{ $epreuve['numero'] }}</td>
                    <td>{{ $epreuve['date'] }}</td>
                    <td>{{ $epreuve['lieu'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
