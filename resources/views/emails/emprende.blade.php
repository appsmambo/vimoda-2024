<!DOCTYPE html>
<html>
<head>
    <title>Vimodashoes.pe</title>
</head>
<body>
    <h1>Nuevo Formulario Emprende:</h1>
    <p>
        DNI / RUC: {{ $mailData['dni'] }} <br>
        Teléfono: {{ $mailData['telefono'] }} <br>
        Nombres: {{ $mailData['nombres'] }} <br>
        Apellidos: {{ $mailData['apellidos'] }} <br>
        Email: {{ $mailData['correo'] }} <br>
        Dirección: {{ $mailData['direccion'] }} <br>
        Departamento: {{ $mailData['departamento'] }} <br>
        Provincia: {{ $mailData['provincia'] }} <br>
        Distrito: {{ $mailData['distrito'] }} <br>
    </p>
</body>
</html>
