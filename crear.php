<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <input type="text" name="codigo" placeholder="Ingrese el codigo">
</br>
        <input type="text" name="nombre" placeholder="Ingrese nombre">
</br>
        <input type="text" name="precio" placeholder="Ingrese el precio">
</br>
        <input type="text" name="existencia" placeholder="Ingrese el existencia">
</br>
            <input type="hidden" name="accion" value="Crear">
            <button type="submit">Guardar</button>
    </form>
</body>
</html>