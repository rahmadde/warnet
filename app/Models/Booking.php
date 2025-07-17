<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kd_booking',
        'no_pc',
        'id_member',
        'tgl_booking',
    ];

    public function member()
{
    return $this->belongsTo(Member::class, 'id_member', 'id_member');
}
}
