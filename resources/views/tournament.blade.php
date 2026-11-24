@extends('layouts.catalog')

@section('title', 'Турнир: ' . $tournament->name)

@section('content')
    <h1>Турнир: {{ $tournament->name }}</h1>

    <table class="table-wrap">
        <tr>
            <th>Название</th>
            <td>{{ $tournament->name }}</td>
        </tr>
        <tr>
            <th>Год</th>
            <td>{{ $tournament->year }}</td>
        </tr>
        <tr>
            <th>Страна</th>
            <td>{{ $tournament->country->name ?? 'Не указана' }}</td>
        </tr>
    </table>
    
    <a href="{{ url()->previous() }}">← Назад</a>
@endsection