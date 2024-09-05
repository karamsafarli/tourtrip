<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'startDate',
        'duration',
        'adults',
        'children',
        'pickupCity',
        'dropCity',
        'accommodationType',
        'interestedIn',
        'budget',
        'comments',
        'fullName',
        'email',
        'whatsappNumber',
        'city',
    ];

    protected $casts = [
        'accommodationType' => 'array',
    ];
}
