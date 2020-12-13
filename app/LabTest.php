<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['patient_id', 'physician', 'pathologist', 'med_tech', 'formal_name', 'status', 'data'];

    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
