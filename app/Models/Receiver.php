<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'postal_address', 'email', 'street_address', 'city', 'state', 'country'
    ];

    public function shipments(){
        return $this->hasMany(Shipment::class, 'receiver_id', 'id');
    }
}
