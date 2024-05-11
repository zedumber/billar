<!DOCTYPE html>
<html>
<head>
    <title>Mesas de Billar</title>
</head>
<body>
    <h1>Mesas de Billar</h1>
    <ul>
        @foreach ($mesa as $mesa)
            <li>{{ $mesa->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>
