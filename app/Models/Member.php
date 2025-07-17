<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_member',
        'nm_member',
        'no_hp',
        'password',
    ];

    public function bilings()
    {
        return $this->hasMany(Biling::class, 'id_member', 'id_member');
    }
    
    public function bookings()
    {
        return $this->hasMany(Biling::class, 'id_member', 'id_member');
    }
}