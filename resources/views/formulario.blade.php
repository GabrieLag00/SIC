@extends('plantilla')
@section('titulo')
    Agregar estudiantes
@endsection
@section('contenido')



<section>
    <div class="contenedor">
        <form action="{{url('alumnos')}}" method="POST">
            <h2>
                <img src="{{ asset('assets/utcbis-logo.png') }}" width="310" height="120">
            </h2>
            @csrf
            <div class="inputContainer">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name_student" class="campo"  value="{{ old('name_student') }}">
                <label for="name_student">Nombre</label>
                @error('name_student')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputContainer">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="lastname_student" class="campo"  value="{{ old('lastname_student') }}">
                <label for="lastname_student">Apellido</label>
                @error('lastname_student')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputContainer">
                <i class="fa-solid fa-id-badge"></i>
                <input type="text" name="id_student" class="campo"  value="{{ old('id_student') }}">
                <label for="id_student">ID Estudiante</label>
                @error('id_student')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputContainer">
                <i class="fa-solid fa-calendar"></i>
                <input type="date" name="birthday" class="campo"  value="{{ old('birthday') }}">
                <label for="birthday">Fecha de nacimiento</label>
                @error('birthday')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputContainer">
                <i class="fa-solid fa-comment"></i>
                <textarea name="comments" class="campo">{{ old('comments') }}</textarea>
                <label for="comments">Comentarios</label>
                @error('comments')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="boton">Registrar</button>
        </form>
    </div>
</section>
@endsection
