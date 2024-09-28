<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_masuk extends Model
{
    use HasFactory;
    protected $table = 'd_masuks';

    protected $primaryKey = 'id_masuk';

    public $incrementing = false;

    protected $keyType = 'varchar';
    protected $fillable = ['id_masuk', 'kd_masuk', 'kd_barang_beli', 'jumlah', 'subtotal'];

    public function masuk()
    {
        return $this->belongsTo(Masuk::class, 'kd_masuk');
    }
}
