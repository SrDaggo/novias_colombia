@if ($task->status == 'incomplete')

<form action="{{ route('task.update',$task->id) }}">
    <button type="submit">Listo</button>
    @csrf
    @method('UPDATE')
</form>

@else
<form action="{{ route('task.update',$task->id) }}">
    @csrf
    @method('UPDATE')
    <button type="submit"> Aun no</button>
</form>
@endif
