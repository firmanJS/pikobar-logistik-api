<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OutgoingLetter extends Model
{
    use SoftDeletes;
    protected $table = 'outgoing_letters';

    const APPROVED = 'approved';
    const NOT_APPROVED = 'not_approved';
    
    protected $fillable = [
        'user_id',
        'letter_number',
        'letter_date',
        'status',
        'filename'
    ];
}
