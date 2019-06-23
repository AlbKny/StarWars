<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //

    protected $table = 'characters';
    protected $primaryKey = 'character_id';
    // protected $fillable = ['body'];
    protected $fillable = [
        'name', 'height', 'mass', 'hair_color', 'skin_color', 'eye_color', 'birth_year', 'gender',
    ];
    protected $hidden = ['remember_token'];
}
