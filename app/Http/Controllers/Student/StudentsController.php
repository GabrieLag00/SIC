<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

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
    public function store(StudentRequest $request)
    {
        return "Formulario procesado";
    }
}
