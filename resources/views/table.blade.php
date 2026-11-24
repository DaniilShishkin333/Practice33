@extends('layouts.catalog')

@section('title', 'Таблица: ' . $table)

@section('content')
    <h1>Таблица: {{ $table }}</h1>

    <p>
        <a href="/{{ $table }}/create" style="padding: 8px 15px; background: #00509d; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 15px;">
            + Добавить запись
        </a>
    </p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->name ?? 'Без названия' }}</td>
                        <td>
                            <a href="/{{ $table }}/{{ $record->id }}">Просмотр</a> | 
                            <a href="/{{ $table }}/{{ $record->id }}/edit">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
<a href="{{ url('/') }}">← На главную</a>
@endsection
