<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customerId';
    protected $keyType = 'string';

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
