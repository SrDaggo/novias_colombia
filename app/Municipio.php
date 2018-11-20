<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id_departamento');
    }
}
