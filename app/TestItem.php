<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestItem extends Model
{
    protected $fillable = ['lab_test_id', 'item', 'normal', 'result'];

    public function labTest() {
        return $this->belongsTo('App\LabTest');
    }
}
