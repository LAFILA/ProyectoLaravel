<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios - test</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }}, ({{ $user->email }})</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
</body>
</html>