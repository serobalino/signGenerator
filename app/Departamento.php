<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $primaryKey           =       "id_de";
    protected $table                =       "departamentos";

    public function empresa(){
        return $this->hasOne(Empresa::class,"id_em","id_em");
    }
}
