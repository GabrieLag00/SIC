<form action="{{ route('estudiantes.update', $student->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="inputContainer">
        <i class="fa-solid fa-user"></i>
        <label for="name_student">Nombre</label>
        <input type="text" name="name_student" class="campo" value="{{ $student->name_student }}">
        @error('name_student')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="boton">Aceptar</button>
</form>
