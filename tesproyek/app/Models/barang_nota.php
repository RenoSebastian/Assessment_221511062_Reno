<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_nota extends Model
{
    protected $table = 'barang_nota';

    protected $fillable = [
        'KodeNota',
        'KodeBarang',
        'JumlahBarang',
        'HargaSatuan',
        'Jumlah',
    ];

    /**
     * Relasi Many-to-One dengan tabel Nota.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nota()
    {
        return $this->belongsTo(Nota::class, 'KodeNota', 'KodeNota');
    }

    /**
     * Relasi Many-to-One dengan tabel Barang.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'KodeBarang', 'KodeBarang');
    }
}
