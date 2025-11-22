<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail di contatto</title>
</head>
<body>
    <h2>Nuova richiesta di contatto</h2>

    <p><strong>Nome:</strong> {{ $name }} {{ $surname }}</p>

    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Telefono:</strong> {{ $phone }}</p>

    <p><strong>Messaggio:</strong></p>
    <p>{{ $body }}</p>
</body>
</html>
