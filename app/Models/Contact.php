<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'date',
        'hour',
        'name',
        'email',
        'phone',
        'comment',
        'isArchived',
    ];
}
