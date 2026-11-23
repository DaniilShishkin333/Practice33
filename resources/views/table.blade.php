@extends('layouts.catalog')

@section('title', 'Таблица: ' , $table)

@section('content')
    <h1>Таблица: {{ $table }}</h1>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название / Имя</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                {{-- Здесь мы перебираем записи, которые передал контроллер --}}
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        {{-- Выводим второе поле (обычно это name или title) --}}
                        <td>{{ $record->name ?? $record->title ?? 'Без названия' }}</td>
                        <td>
                            
                            <a href="{{ url('/' . $table . '/' . $record->id) }}">Просмотр</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    <a href="{{ url('/') }}">← На главную</a>
@endsection