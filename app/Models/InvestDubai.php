<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestDubai extends Model
{

    protected $table = 'investdubai';
    
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
