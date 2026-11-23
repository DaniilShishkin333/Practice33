@extends('layouts.catalog')

@section('title', 'Игрок: ' . $player->name)

@section('content')
    <h1>Игрок: {{ $player->name }}</h1>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Имя</th>
                <td>{{ $player->name }}</td>
            </tr>
            <tr>
                <th>Год рождения</th>
                <td>{{ $player->year }}</td>
            </tr>
            <tr>
                <th>Игровой номер</th>
                <td>{{ $player->number }}</td>
            </tr>
            <tr>
                <th>Команда</th>
                <td>{{ $player->team_id }}</td> 
            </tr>
            <tr>
                <th>Город</th>
                <td>{{ $player->city_id }}</td>
            </tr>
        </table>
    </div>

    

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection