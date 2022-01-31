<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 'receiver_id', 'consignment_no', 'package_type', 'net_weight', 'gross_weight', 'package_no', 'voyage_no', 'package_description', 'departure_time', 'origin', 'destination', 'take_off_date', 'expected_delivery_date', 'status', 'comment', 'pickup_time'
    ];

    public function receiver(){
        return $this->belongsTo(Receiver::class);
    }

    public function sender(){
        return $this->belongsTo(Sender::class);
    }
}
