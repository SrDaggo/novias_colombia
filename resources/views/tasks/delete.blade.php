<form action="{{ route('task.destroy',$task->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Borrar</button>
</form>
