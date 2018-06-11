<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'job', 'phone', 'mail', 'adress', 'postalcode', 'town', 'biography',
    ];
}
