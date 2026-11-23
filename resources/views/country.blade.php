@extends('layouts.catalog')

@section('title', 'Страна: ' . $country->name)

@section('content')
    <h1>Страна: {{ $country->name }}</h1>

    <div class="table-wrap">
        <table>
             <tr>
                <th>Название страны</th>
                <td>{{ $country->name }}</td>
            </tr>
        </table>
    </div>

    

    <a href="{{ url()->previous() }}">← Назад</a>
@endsection