<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'marrige_date',
        'gender',
        'departamento_id',
        'municipio_id',
        'phone',
        'about_me',
        'partner_name',
        'partner_gender',
        'expected_guests',
        'wedding_hour_start',
        'wedding_minute_start',
        'wedding_hour_finish',
        'wedding_minute_finish',
        'wedding_style',
        'wedding_color',
        'wedding_weather',
        'wedding_honeymoon',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Accessors and Mutators

    //Relationships

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id_departamento');
    }
    public function municipio()
    {
        return $this->belongsTo('App\Municipio', 'municipio_id', 'id_municipio');
    }

    public function wedding_departamento()
    {
        return $this->belongsTo('App\Departamento', 'wedding_departamento', 'id_departamento');
    }
    public function wedding_municipio()
    {
        return $this->belongsTo('App\Municipio', 'wedding_municipio', 'id_municipio');
    }

}
