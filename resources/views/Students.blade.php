@extends('plantilla2')

@section('titulo')
    Lista de Reprobados
@endsection

@section('contenido2')
    <div class="tbl-header">
        <h1>Lista de Reprobados</h1>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="custom-row">
                        <td>{{ $student->id_student }}</td>
                        <td>{{ $student->name_student }}</td>
                        <td>{{ $student->lastname_student }}</td>
                        <td>{{ $student->birthday }}</td> <!-- Corrected field name and added to display -->
                        <td>{{ $student->comments }}</td> <!-- Added comments field to display -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
