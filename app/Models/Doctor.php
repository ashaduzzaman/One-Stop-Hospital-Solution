<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table='doctors';
    protected $fillable= ['name','email','salary','phone','workarea'];

    public function patients()
    {
        return $this->hasMany('App\Models\Patient');
    }

}
