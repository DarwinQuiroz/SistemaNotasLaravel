<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materias";
    protected $fillable = ["descripcion","credito", "nivel_id"];

    public function nivel()
    {
    	return $this->belongsTo('App\Materia');
    }

    public function nota()
    {
        return $this->belongsTo('App\Nota');
    }

    public function alumnos()
    {
        return $this->belongsToMany('App\Alumno')->withTimestamps();
    }

    public function profesores()
    {
        return $this->belongsToMany('App\Profesor')->withTimestamps();
    }
}
