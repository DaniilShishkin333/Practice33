@extends('layouts.catalog')

@section('title', 'Город: ' . $city->name)

@section('content')
    <h1>Город: {{ $city->name }}</h1>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Название города</th>
                <td>{{ $city->name }}</td>
            </tr>
            <tr>
                <th>Страна (ID)</th>
                <td>{{ $city->country_id }}</td>
            </tr>
        </table>
    </div>

    

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection