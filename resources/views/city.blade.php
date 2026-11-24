@extends('layouts.catalog')

@section('title', 'Город: ' . $city->name)

@section('content')
    <h1>Город: {{ $city->name }}</h1>

    <table class="table-wrap">
        <tr>
            <th>Название</th>
            <td>{{ $city->name }}</td>
        </tr>
        <tr>
            <th>Страна</th>
            <td>
                @if($city->country)
                    <a href="/countries/{{ $city->country->id }}">{{ $city->country->name }}</a>
                @else
                    Не указана
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection