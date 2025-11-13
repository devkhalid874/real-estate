<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurMission extends Model
{

    protected $table = 'ourmission';

    protected $fillable = [
        'title',
        'description'
    ];
}
