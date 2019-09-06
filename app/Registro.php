<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $primaryKey           =       "id_re";
    protected $table                =       "registros";

    protected $appends              =       ["code_re"];

    protected $hidden               =       ["id_re"];

    public function getCodeReAttribute(){
        return sha1(md5($this->attributes['id_re']));
    }

    public function cargo(){
        return $this->hasOne(Cargo::class,"id_ca","id_ca");
    }
}
