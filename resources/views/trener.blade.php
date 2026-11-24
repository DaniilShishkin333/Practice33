@extends('layouts.catalog')

@section('title', 'Тренер: ' . $trener->name)

@section('content')
    <h1>Тренер: {{ $trener->name }}</h1>

    <table class="table-wrap">
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
        <td>
    @if($trener->team)
        <a href="/teams/{{ $trener->team->id }}">{{ $trener->team->name }}</a>
    @else
        Не указана
    @endif
        </td>
    </tr>
</table>
</div>
    
    <a href="{{ url()->previous() }}">← Назад</a>
@endsection