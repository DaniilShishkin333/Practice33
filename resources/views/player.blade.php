@extends('layouts.catalog')

@section('title', 'Игрок: ' . $player->name)

@section('content')
    <h1>Игрок: {{ $player->name }}</h1>

    <table class="table-wrap">
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
            <td>{{ $player->team->name ?? 'Не указана' }}</td>
        </tr>
        <tr>
            <th>Город</th>
            <td>{{ $player->city->name ?? 'Не указан' }}</td>
        </tr>
    </table>

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection