<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Город #{{ $team->id }}</title>
</head>
<body>
    <h1>Информация о записи #{{ $team->id }}</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        @foreach ($team->toArray() as $field => $value)
            <tr>
                <th>{{ $field }}</th>
                <td>{{ $value ?? '—' }}</td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url()->previous() }}">← Назад</a>
</body>
</html>
