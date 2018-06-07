<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $table = ['mesesposibles'];
    protected $fillable = ['mes','id'];
    public function trabajadores(){
        return $this->hasMany('App/Trabajador');
    }
}
