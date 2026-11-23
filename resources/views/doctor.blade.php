<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Город #{{ $doctor->id }}</title>
</head>
<body>
    <h1>Информация о записи #{{ $doctor->id }}</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        @foreach ($doctor->toArray() as $field => $value)
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
