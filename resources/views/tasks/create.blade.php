<form action="{{ route('task.store') }}" method="POST">
    @csrf

    @if($errors->any())

    <h3 class="">Corrige estos errores para continuar</h3>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
    @endif

    <label for="title">Título</label>
    <input type="text" name="title" maxlength="120">
    <br>

    <label for="description">Descripción</label>
    <textarea name="description"></textarea>
    <br>

    <select name="task_category" id="" required>
        <option value="">Categoria</option>
        @foreach ($task_categories as $task_category)
        <option value="{{ $task_category->id }}">{{ $task_category->name }}</option>
        @endforeach
    </select>
    <br>

    <label for="start_date">Fecha de inicio</label>
    <input type="date" name="start_date" value="{{ old('start_date') }}">
    <br>
    <label for="finish_date">Fecha de finalización</label>
    <input type="date" name="finish_date" value="{{ old('finish_date') }}">
    <br>


    <button type="submit">Crear</button>

</form>
