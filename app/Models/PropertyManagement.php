<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyManagement extends Model
{
      protected $table = 'property_management';

    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
