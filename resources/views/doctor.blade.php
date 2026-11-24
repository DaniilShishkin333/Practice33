@extends('layouts.catalog')

@section('title', 'Врач: ' . $doctor->name)

@section('content')
    <h1>Врач: {{ $doctor->name }}</h1>

    <table class="table-wrap">
        <table>
        <tr>
            <th>Имя</th>
            <td>{{ $doctor->name }}</td>
        </tr>
        <tr>
            <th>Год рождения</th>
            <td>{{ $doctor->year }}</td>
        </tr>
        <tr>
             <th>Команда</th>
        <td>
    @if($doctor->team)
        <a href="/teams/{{ $doctor->team->id }}">{{ $doctor->team->name }}</a>
    @else
        Не указана
    @endif
        </td>
    </tr>
</table>
</div>
    
    <a href="{{ url()->previous() }}">← Назад</a>
@endsection