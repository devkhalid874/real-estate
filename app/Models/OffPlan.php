<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffPlan extends Model
{
    protected $table = 'offplan';


    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
