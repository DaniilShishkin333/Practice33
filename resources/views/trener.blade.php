@extends('layouts.catalog')

@section('title', 'Тренер: ' . $trener->name)

@section('content')
    <h1>Тренер: {{ $trener->name }}</h1>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Имя</th>
                <td>{{ $trener->name }}</td>
            </tr>
            <tr>
                <th>Год рождения</th>
                <td>{{ $trener->year }}</td>
            </tr>
            <tr>
                <th>Команда</th>
                <td>{{ $trener->team_id }}</td>
            </tr>
        </table>
    </div> 



    <a href="{{ url()->previous() }}">← Назад</a>
@endsection