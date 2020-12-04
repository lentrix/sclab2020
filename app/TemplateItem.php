<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateItem extends Model
{
    protected $fillable = ['lbt_template_id', 'test', 'normal'];

    public function template() {
        return $this->belongsTo('App\LbtTemplate');
    }
}
