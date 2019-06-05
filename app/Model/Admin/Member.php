<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'name', 'gender', 'dob', 'phone', 'position', 'key', 'type'
    ];
}
