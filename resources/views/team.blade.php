@extends('layouts.catalog')

@section('title', 'Команда: ' . $team->name)

@section('content')
    <h1>Команда: {{ $team->name }}</h1>
    
    <div class="team-info">
        <p><strong>Год основания:</strong> {{ $team->year }}</p>
        <p><strong>Город:</strong> 
            @if($team->city)
                <a href="/cities/{{ $team->city->id }}">{{ $team->city->name }}</a>
            @else
                Не указан
            @endif
        </p>
    </div>

    <h2>Состав команды</h2>
    <table class="table-wrap">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Номер</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($team->players as $player)
                <tr>
                    <td><a href="/players/{{ $player->id }}">{{ $player->name }}</a></td>
                    <td>{{ $player->number }}</td>
                </tr>
            @empty
                <tr><td colspan="2">Игроков пока нет</td></tr>
            @endforelse
        </tbody>
    </table>

    <h2>Тренерский штаб</h2>
    <ul>
        @foreach ($team->treners as $trener)
            <li><a href="/treners/{{ $trener->id }}">{{ $trener->name }}</a> ({{ $trener->year }} г.р.)</li>
        @endforeach
    </ul>

    <h2>Медицинский персонал</h2>
    <ul>
        @foreach ($team->doctors as $doctor)
            <li><a href="/doctors/{{ $doctor->id }}">{{ $doctor->name }}</a></li>
        @endforeach
    </ul>

    <h2>Стадионы</h2>
    <ul>
        @foreach ($team->stadiums as $stadium)
            <li><a href="/stadiums/{{ $stadium->id }}">{{ $stadium->name }}</a> (Вместимость: {{ $stadium->number_of_seats }})</li>
        @endforeach
    </ul>

    <h2>Турниры</h2>
    <ul>
        @foreach ($team->tournaments as $tournament)
            <li><a href="/tournaments/{{ $tournament->id }}">{{ $tournament->name }}</a> ({{ $tournament->year }})</li>
        @endforeach
    </ul>

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection