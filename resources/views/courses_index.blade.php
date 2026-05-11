<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Lista de cursos: </h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Creditos</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->description}}</td>
                    <td>{{$course->credits}}</td>
                    <td>{{$course->is_active}}</td>
                    <td>
                        <a href="{{route('courses.edit', $course->id)}}">Editar</a>
                        <form action="{{route('courses.destroy', $course->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <form action="{{route('courses.store')}}" method="post">
            @csrf
            
            <br>
            <label>Nombre</label>
            <input type="text" name="name" required>
            
            <br>
            <label>Descripcion</label>
            <input type="text" name="description" required>

            <br>
            <label>Creditos</label>
            <input type="number" name="credits" required>

            <br>
            <button type="submit">Crear curso</button>
        </form>
    </div>

</body>
</html>