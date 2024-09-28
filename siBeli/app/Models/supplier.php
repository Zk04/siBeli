<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $primaryKey = 'kd_supplier';

    public $incrementing = false;

    protected $keyType = 'varchar';
    protected $fillable = ['kd_supplier', 'nama_supplier', 'alamat'];
    public function masuks()
    {
        return $this->hasMany(Masuk::class, 'kd_supplier', 'kd_supplier');
    }
}
