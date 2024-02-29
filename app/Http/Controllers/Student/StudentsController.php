<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\models\Student;

class StudentsController extends Controller
{
    /**
     * Constructor del controlador para aplicar el middleware de autenticación.
     */
    //public function __construct()
  //  {
   //     $this->middleware('auth');
    //}

    /**
     * Muestra el formulario para crear un estudiante.
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Almacena un nuevo estudiante.
     */
    public function store(Request $request)
    {
        // Crea un nuevo objeto Student y asigna los valores del formulario
        $student = new \App\Models\Student;
        $student->name_student = $request->input('name_student');
        $student->lastname_student = $request->input('lastname_student');
        $student->id_student = $request->input('id_student');
        $student->birthday = $request->input('birthday');
        $student->comments = $request->input('comments');
        // Asigna otros campos requeridos según tu lógica de negocio

        // Guarda el estudiante en la base de datos
        $student->save();

        // Retorna un mensaje indicando que el estudiante se ha registrado correctamente
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado correctamente');
    }
}
