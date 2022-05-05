<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;


class Candidate extends Model
{
    use Uuid;
    
    public $incrementing = false;
    public $timestamps = true;
    // protected $keyType = 'string';

    protected $fillable = [
        'posisition_applied',
        'full_name',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'nationality',
        'address',
        'phone_number',
        'email',
    ];
}
