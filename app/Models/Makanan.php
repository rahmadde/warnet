<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_pemesanan',
        'nm_makanan',
        'id_member',
        'jumlah',
        'tgl_pemesanan',
    ];

     public function member()
{
     return $this->belongsTo(Member::class, 'id_member', 'id_member');
}
}
