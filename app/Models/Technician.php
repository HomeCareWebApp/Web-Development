<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $primaryKey = 'technicianId';
    protected $keyType = 'string';

    protected $fillable =[
        'technicianId',
        'name',
        'age',
        'rating',
        'email',
        'password',
        'category',
        'experience',
        'location',
        'profilePicture',
        'phone'
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
