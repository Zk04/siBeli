<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;

    protected $primaryKey = 'kd_masuk';
    public $incrementing = false;
    protected $keyType = 'varchar';

    protected $fillable = ['kd_masuk', 'tgl_masuk', 'kd_supplier', 'total_masuk'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'kd_supplier', 'kd_supplier');
    }

}