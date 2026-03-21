<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Contacto</title>
</head>
<body>
    <h2>Has recibido una nueva consulta</h2>
    <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $datos['email'] }}</p>
    <p><strong>Mensaje:</strong><br> {{ $datos['mensaje'] }}</p>
</body>
</html>
