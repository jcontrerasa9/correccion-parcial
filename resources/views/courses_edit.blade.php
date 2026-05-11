<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('courses.update', $course->id)}}" method="post">
            @csrf
            @method('put')

            <br>
            <label>Nombre</label>
            <input type="text" name="name" value="{{$course->name}}">
            
            <br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{$course->description}}">

            <br>
            <label>Creditos</label>
            <input type="number" name="credits" value="{{$course->credits}}">

            <br>
            <label>Estado (0: desactivar)</label>
            <input type="number" name="is_active" value="{{$course->is_active}}">

            <br>
            <button type="submit">Editar curso</button>
        </form>
    </div>

</body>
</html>