<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'orderId';
    protected $keyType = 'string';

    protected $fillable =[
        'orderId',
        'orderDate',
        'service',
        'address',
        'description',
        'technicianId',
        'status',
        'customerId'
    ];

    public function Technician()
    {
        return $this->belongsTo(Technician::class, 'foreign_key', 'technicianId');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'foreign_key', 'customerId');
    }
}
