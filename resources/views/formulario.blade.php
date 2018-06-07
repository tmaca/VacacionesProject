<html>
<head>
</head>
<body>
<form method="post" action="datos">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nombre Trabajador: <input name="nombre" id="nombre">
        Mes seleccionado: <input name="mes" id="mes">
    <input type="submit" value="enviar"/>
</form>
</body>
</html>