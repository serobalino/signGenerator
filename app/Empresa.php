<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey           =       "id_em";
    protected $table                =       "empresas";

    protected $appends              =       ["telp_em","tell_em"];

    protected $casts                =   [
        'lat_em'    =>  'double',
        'lng_em'    =>  'double'
    ];

    public function getTelpEmAttribute(){
        $nuevo  =   substr($this->attributes['telefono_em'], 2);
        $sub    =   substr($this->attributes['telefono_em'], 1,1);
        return "(593 $sub) ".substr_replace($nuevo," ",4,0);
    }

    public function getTellEmAttribute(){
        $nuevo  =   substr($this->attributes['telefono_em'], 1);
        return "+593".$nuevo;
    }
}
