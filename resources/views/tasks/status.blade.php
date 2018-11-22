@if ($task->status == 'incomplete')

<form action="{{ route('task.update_status',$task->id) }}" method="POST">
    <button type="submit">Listo</button>
    @csrf
    @method('PUT')
    <input type="hidden" name="status" value="1">
</form>

@else
<form action="{{ route('task.update_status',$task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="status" value="0">
    <button type="submit"> Aun no</button>
</form>
@endif
