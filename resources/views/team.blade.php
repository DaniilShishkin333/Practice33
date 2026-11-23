@extends('layouts.catalog')

@section('title', 'Команда: ' . $team->name)

@section('content')
    <h1>Команда: {{ $team->name }}</h1>

    <div class="table-wrap">
        <table>
           <tr>
                <th>Имя</th>
                <td>{{ $team->name }}</td>
            </tr>
            <tr>
                <th>Год рождения</th>
                <td>{{ $team->year }}</td>
            </tr>
            <tr>
                <th>Город</th>
                <td>{{ $team->city_id }}</td>
            </tr>
        </table>
    </div> 



    <a href="{{ url()->previous() }}">← Назад</a>
@endsection