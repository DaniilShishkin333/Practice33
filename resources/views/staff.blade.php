<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Город #{{ $staff->id }}</title>
</head>
<body>
    <h1>Информация о записи #{{ $staff->id }}</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        @foreach ($staff->toArray() as $field => $value)
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
