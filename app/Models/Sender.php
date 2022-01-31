<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'street_address', 'postal_address', 'city', 'state', 'country'
    ];

    public function shipments(){
        return $this->hasMany(Shipment::class, 'sender_id', 'id');
    }
}
