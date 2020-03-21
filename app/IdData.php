<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdData extends Model
{
    protected $fillable = [
        'id_no',
        'full_name',
        'position',
        'address',
        'contact_number',
        'date_of_birth',
        'ptc_name',
        'ptc_address',
        'ptc_relationship',
        'ptc_contact_number'
    ];
}
