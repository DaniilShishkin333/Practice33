@extends('layouts.catalog')

@section('title', 'Сотрудник: ' . $staff->name)

@section('content')
    <h1>Сотрудник: {{ $staff->name }}</h1>

    <table class="table-wrap">
        <table>
        <tr>
            <th>Имя</th>
            <td>{{ $staff->name }}</td>
        </tr>
        <tr>
            <th>Год рождения</th>
            <td>{{ $staff->year }}</td>
        </tr>
        <tr>
            <th>Команда</th>
        <td>
    @if($staff->team)
        <a href="/teams/{{ $staff->team->id }}">{{ $staff->team->name }}</a>
    @else
        Не указана
    @endif
        </td>
    </tr>
</table>
</div>
    
    <a href="{{ url()->previous() }}">← Назад</a>
@endsection