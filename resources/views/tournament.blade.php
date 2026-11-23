@extends('layouts.catalog')

@section('title', 'Турнир: ' . $tournament->name)

@section('content')
    <h1>Турнир: {{ $tournament->name }}</h1>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Имя</th>
                <td>{{ $tournament->name }}</td>
            </tr>
            <tr>
                <th>Год рождения</th>
                <td>{{ $tournament->year }}</td>
            </tr>
            <th>Страна (ID)</th>
                <td>{{ $tournament->country_id }}</td>
            </tr>
        </table>
    </div>



    <a href="{{ url()->previous() }}">← Назад</a>
@endsection