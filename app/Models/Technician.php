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
        'counter',
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
