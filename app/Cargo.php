<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $primaryKey           =       "id_ca";
    protected $table                =       "cargos";

    public function departamento(){
        return $this->hasOne(Departamento::class,"id_de","id_de");
    }
}
