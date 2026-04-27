<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Detalle de {{$course->name}}</h1>

        <br>
        <label for="p1">Nombre: </label>
        <p>{{$course->name}}</p>

        <br>
        <label for="p2">Descripcion: </label>
        <p>{{$course->description}}</p>

        <br>
        <label for="p3">Creditos: </label>
        <p>{{$course->credits}}</p>

        <br>
        <label for="p4">Esta activo: </label>
        <p>{{$course->is_active}}</p>
    </div>
</body>
</html>