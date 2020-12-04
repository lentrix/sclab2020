<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'lname', 'fname', 'address', 'gender', 'bdate', 'phone'
    ];

    protected $dates = ['bdate'];

    public function getNameAttribute() {
        return $this->lname . ", " . $this->fname;
    }

    public function labTests() {
        return $this->hasMany('App\LabTest');
    }
}
