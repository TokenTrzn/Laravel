<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividades de Usuario</title>
</head>
<body>
    <h1>Actividades de Usuario</h1>

    <ul>
        @foreach($activities as $activity)
            <li>
                {{ $activity->type }} - {{ $activity->datetime }} - {{ $activity->user->name }}

                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta actividad?');">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
