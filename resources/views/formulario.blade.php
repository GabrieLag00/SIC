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
                <input type="text" name="name_student" class="campo"  value="{{old('name_student')}}">
                <label for="name_student">Nombre</label>
                @error('name_student')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="inputContainer">
                <i class="fa-solid fa-id-badge"></i>
                <input type="text" name="id_student" >
                <label for="id_student">Matricula</label>
            </div>
            <div class="inputContainer">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="email_student" >
                <label for="email_student">Correo</label>
                @error('email_student')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="inputContainer">
                <i class="fa-solid fa-lock"></i>
                <input type="text" name="password_student" >
                <label for="password_student">Contraseña</label>
                @error('password_student')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="boton">Registrar</button>
        </form>
    </div>
</section>
@endsection
