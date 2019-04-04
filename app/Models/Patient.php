<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table='patients';
    protected $fillable= ['name','age','contact','doctor_id','date'];    

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
