<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyingSelling extends Model
{
    protected $table = 'buyingselling';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
