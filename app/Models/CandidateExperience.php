<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class CandidateExperience extends Model
{
    use Uuid;

    protected $table = 'candidate_experiences';
    public $incrementing = false;
    public $timestamps = true;
    protected $keyType = 'string';

    protected $fillable = [
        'candidate_id',
        'company_name',
        'posisition',
        'date_start',
        'date_end',
        'reason_leaving',
        'job_desc',
    ];
}
