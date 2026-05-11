<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <br>
            <label>Nombre</label>
            <p>{{$course->name}}</p>
            
            <br>
            <label>Descripcion</label>
            <p>{{$course->description}}</p>

            <br>
            <label>Creditos</label>
            <p>{{$course->credits}}</p>

            <br>
            <label>Estado (0: inactivo)</label>
            <p>{{$course->is_active}}</p>            
        </div>
</body>
</html>