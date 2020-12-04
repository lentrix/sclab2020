<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LbtTemplate extends Model
{
    protected $fillable = ['name', 'price'];

    public function items() {
        return $this->hasMany('App\TemplateItem');
    }

    public static function list() {
        $lbt = static::orderBy('name')->get();
        $list = [];
        foreach($lbt as $l) {
            $list[$l->id] = $l->name;
        }
        return $list;
    }
}
