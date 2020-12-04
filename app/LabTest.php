<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['patient_id', 'test_name', 'amount', 'physician', 'pathologist'];

    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
