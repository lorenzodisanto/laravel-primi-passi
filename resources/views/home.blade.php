<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>
    <p>{{ $paragraph }}</p>
    <ul>
        @forelse( $students as $student )
        <li>{{ $student }}</li>
        @empty
        <li>Nessun studente</li>
        @endforelse
    </ul>
</body>
</html>