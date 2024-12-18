<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{


    protected $table = '201_file_system';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'without_middle_name',
        'extension_name',
        'date_of_birth',
        'civil_status',
        'address',
        'contact_details',
    ];
}
