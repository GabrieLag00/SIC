<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Constructor del controlador para aplicar filtros a los métodos.
     */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$students = Student::all();*/
        $students = Student::paginate(10);
        return view('Students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario'); // Asegúrate de que el archivo de la vista exista en resources/views/formulario.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
    $validatedData = $request->validate([
        'name_student' => 'required|string|max:255',
        'lastname_student' => 'required|string|max:255',
        'id_student' => 'required|string|max:10|unique:students,id_student',
        'birthday' => 'required|date',
        'comments' => 'nullable|string'
    ]);

    // Creación del nuevo estudiante en la base de datos usando Eloquent ORM
    $student = new Student($validatedData);
    $student->save();

    // Redirección a la lista de estudiantes con un mensaje de éxito
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // mostrar detalles de estudiantes
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //mostrar formulario para edita con los datos precargados
        //show
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //procesa esa actualizacion
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('estudiantes.index')->with(
            'notificacion',
            'Estudiante modificado exitosamente'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra el estudiante usando el ID proporcionado
    $student = Student::find($id);

    // Verifica si el estudiante existe
    if ($student) {
        // Elimina el estudiante
        $student->delete();

        // Redirige a la lista de estudiantes con un mensaje de éxito
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    } else {
        // Si no se encuentra el estudiante, redirige con un mensaje de error
        return redirect()->route('estudiantes.index')->with('error', 'Estudiante no encontrado.');
    }
    }
}
