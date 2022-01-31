<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vault extends Model
{
    use HasFactory;

    protected $fillable = [
        'skr_no', 'security_code', 'certificate_deposit_code', 'depositor_code', 'series', 'number', 'items', 'depositor_name', 'depositor_nationality', 'particulars', 'classification', 'quantity', 'date_deposited', 'beneficiary_name', 'beneficiary_nationality', 'comment', 'password'
    ];
}
