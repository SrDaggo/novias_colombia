<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskDate extends Model
{
    protected $fillable = ['name'];

    public function category()
    {
        return $this->belongsTo('App\TaskCategory');
    }
    public function date()
    {
        return $this->belongsTo('App\TaskDate');
    }
}
