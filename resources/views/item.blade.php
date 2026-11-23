@extends('layouts.catalog')

@section('title', 'Запись из таблицы')

@section('content')
    <h1>Запись из таблицы: {{ request()->segment(2) }} (ID: {{ request()->segment(3) }})</h1>

    <div class="table-wrap">
        <table>
            @foreach ($record->toArray() as $field => $value)
                <tr>
                    <th>{{ $field }}</th>
                    <td>{{ $value ?? '-' }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    

    <a href="{{ url()->previous() }}">← Назад к списку</a>
@endsection
