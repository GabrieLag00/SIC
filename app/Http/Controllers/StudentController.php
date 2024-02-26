<?php

namespace App\Http\Controllers;

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
        $students = Student::all();
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
    public function show(string $id)
    {
        // mosttar detalles de estudiantes
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mostrar formulario para edita con los datos precargados
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //processa esa actualicacin
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //permite eliminar registro
    }
}
