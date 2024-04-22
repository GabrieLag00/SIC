<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // Asegúrate de importar la relación correcta

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name_student', 'last_name', 'id_student', 'birthday', 'comments'];

    public function activities(): BelongsToMany { // Corrige la declaración de tipo de retorno
        return $this->belongsToMany(Activity::class); // Asegúrate de referenciar correctamente el modelo relacionado
    }
}
