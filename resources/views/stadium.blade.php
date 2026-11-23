@extends('layouts.catalog')

@section('title', 'Стадион: ' . $stadium->name)

@section('content')
    <h1>Стадион: {{ $stadium->name }}</h1>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Название стадиона</th>
                <td>{{ $stadium->name }}</td>
            </tr>
            <tr>
                <th>Вместимость</th>
                <td>{{ $stadium->number_of_seats ?? '-' }} чел.</td>
            </tr>
        </table>
    </div>

    

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection