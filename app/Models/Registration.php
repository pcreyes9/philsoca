<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'psa_id',
        'prc_number',
        'last_name',
        'first_name',
        'middle_name',
        'hospital_name',
        'hospital_address',
        'email',
        'contact_number',
        'gender',
        'membership',
        'senior_citizen',
        'proof_payment',
        'trainee_cert',
        'status',
        'country'
    ];
}
