@extends('plantilla')

@section('titulo')
    Agregar Estudiantes
@endsection

@section('contenido')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/utcbis-logo.png') }}" alt="UTCBIS Logo" class="h-24 w-auto">
        </div>
        <h2 class="text-2xl font-semibold text-center mb-4">Agregar Estudiantes</h2>
        <p class="text-gray-600 text-center mb-6">Introduce los detalles para registrar al estudiante.</p>
        <form action="{{ url('estudiantes') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name_student" class="block text-gray-700 text-sm font-semibold mb-2">Nombre</label>
                <input type="text" id="name_student" name="name_student" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" value="{{ old('name_student') }}" required placeholder="Ingrese el nombre">
                @error('name_student')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lastname_student" class="block text-gray-700 text-sm font-semibold mb-2">Apellido</label>
                <input type="text" id="lastname_student" name="lastname_student" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" value="{{ old('lastname_student') }}" required placeholder="Ingrese el apellido">
                @error('lastname_student')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_student" class="block text-gray-700 text-sm font-semibold mb-2">ID Estudiante</label>
                <input type="text" id="id_student" name="id_student" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" value="{{ old('id_student') }}" required placeholder="ID de estudiante">
                @error('id_student')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="birthday" class="block text-gray-700 text-sm font-semibold mb-2">Fecha de Nacimiento</label>
                <input type="date" id="birthday" name="birthday" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" value="{{ old('birthday') }}" required>
                @error('birthday')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="comments" class="block text-gray-700 text-sm font-semibold mb-2">Comentarios</label>
                <textarea id="comments" name="comments" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Agregar comentarios">{{ old('comments') }}</textarea>
                @error('comments')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Registrar</button>
        </form>
    </div>
</div>
@endsection
