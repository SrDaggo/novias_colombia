<form action="{{ route('taskCategory.destroy',$task_category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Borrar</button>
</form>
