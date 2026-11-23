@extends('layouts.catalog')

@section('title', 'Персонал: ' . $staff->name)

@section('content')
    <h1>Персонал: {{ $staff->name }}</h1>

    <div class="table-wrap">
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
                <td>{{ $staff->team_id }}</td>
            </tr>
        </table>
    </div> 



    <a href="{{ url()->previous() }}">← Назад</a>
@endsection