@extends('plantilla2')

@section('titulo')
    Lista de Reprobados
@endsection

@section('contenido2')
<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Lista de Reprobados</h1>
            @if (session()->has('notificacion'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ session('notificacion') }}</strong>
                </div>
            @endif
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Apellido</th>
                        <th scope="col" class="px-6 py-3">Fecha de Nacimiento</th>
                        <th scope="col" class="px-6 py-3">Comentarios</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{ $student->id_student }}</td>
                            <td class="px-6 py-4">{{ $student->name_student }}</td>
                            <td class="px-6 py-4">{{ $student->lastname_student }}</td>
                            <td class="px-6 py-4">{{ $student->birthday }}</td>
                            <td class="px-6 py-4">{{ $student->comments }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('estudiantes.show', $student->id) }}" class="text-blue-600 hover:text-blue-900">Detalles</a>
                                <a href="{{ route('estudiantes.edit', $student->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                                <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Está seguro de querer eliminar este estudiante?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $students->links() }}
        </div>
    </div>
</div>
@endsection
