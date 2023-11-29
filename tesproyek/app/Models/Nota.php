<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'nota';

    protected $fillable = [
        'KodeNota',
        'KodeTenan',
        'KodeKasir',
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan', 'id');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir', 'id');
    }
}
