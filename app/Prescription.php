<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
     public function name(){
        return $this->belongsTo('Medication','medication_id','id');
    }
}
