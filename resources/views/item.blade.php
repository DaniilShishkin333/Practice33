<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Запись: {{ $table }} #{{ $record->id }}</title>
</head>
<body>
    @include('layouts.header')
    
    
    <h1>Запись из таблицы: {{ $table }} (ID: {{ $record->id }})</h1>


    <ul>
        @foreach ($record->toArray() as $key =>$value )
             <li><strong>{{ $key }}:</strong> {{ $value }}</li>    
        @endforeach
    </ul>

    
    <a href="/table/{{ $table }}">Назад к списку</a>


    @include('layouts.footer')
</body>
</html>
