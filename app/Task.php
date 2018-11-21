<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['user_id', 'title', 'description', 'category_id', 'date_id', 'status', 'note'];
    //RELATIONSHIPS
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\TaskCategory');
    }

    public function date()
    {
        return $this->belongsTo('App\TaskDate');
    }
}
