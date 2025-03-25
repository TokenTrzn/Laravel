<div>
    <h1>Activities</h1>
        @foreach($activities as $activity)
            <ol>
                <p>Tipo: {{$activity->type}} <br/> Fecha: {{$activity->datetime}} <br/> Pagado: {{$activity->paid}} <br/> Notas: {{$activity->notes}} <br/> Satisfacción: {{$activity->satisfaction}}</p>
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta actividad?');">Eliminar</button>
                </form>
            </ol>
        @endforeach
</div>
