<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['patient_id', 'test_name', 'amount', 'physician', 'pathologist', 'remarks', 'status', 'med_tech'];

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function items() {
        return $this->hasMany('App\TestItem');
    }
}
