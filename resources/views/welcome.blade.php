<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список таблиц</title>
</head>
<body>
    <h1>Список таблиц</h1>
    <ul>
        @foreach ($counts as $table => $count)
            <li>
                <a href="/table/{{ $table }}">{{ $table }}</a> — {{ $count }} записей
            </li>
        @endforeach
    </ul>
</body>
</html>

