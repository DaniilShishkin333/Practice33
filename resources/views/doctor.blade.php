@extends('layouts.catalog')

@section('title', 'Врач: ' . $doctor->name)

@section('content')
    <h1>Врач: {{ $doctor->name }}</h1>

    <div class="table-wrap">
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
                <td>{{ $doctor->team_id }}</td>
            </tr>
        </table>
    </div> 



    <a href="{{ url()->previous() }}">← Назад</a>
@endsection
