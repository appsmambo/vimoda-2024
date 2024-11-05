<!DOCTYPE html>
<html>
<head>
    <title>Vimodashoes.pe</title>
</head>
<body>
    <h1>Nuevo mensaje desde la web:</h1>
    <p>
        Nombre: {{ $mailData['nombre'] }} <br>
        Email: {{ $mailData['email'] }} <br>
        Teléfono: {{ $mailData['telefono'] }} <br>
        Mensaje: {{ $mailData['mensaje'] }} <br>
    </p>
</body>
</html>
