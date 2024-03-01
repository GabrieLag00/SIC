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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para procesar el formulario de creacion
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
        //permite eliminar registro
    }
}
