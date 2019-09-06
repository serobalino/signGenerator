<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey           =       "id_em";
    protected $table                =       "empresas";

    protected $casts                =   [
        'lat_em'    =>  'double',
        'lng_em'    =>  'double'
    ];
}
