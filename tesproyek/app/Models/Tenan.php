<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    protected $table = 'tenan';

    protected $fillable = [
        'KodeTenan',
        'NamaTenan',
        'HP',
    ];
}
