<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица: {{ $table }}</title>
</head>
<body>
    <h1>Таблица: {{ $table }}</h1>
    <a href="/">Назад</a>
    <table border="1">
        <thead>
            <tr>
                @if ($records->isNotEmpty())
                    @foreach (array_keys($records->first()->toArray()) as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr onclick="window.location='/table/{{ $table }}/{{ $record->id }}'" style="cursor: pointer;">
                    @foreach ($record->toArray() as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

