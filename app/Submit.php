<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    //
    protected $table = 'emails';

    protected $fillable = [
        'submitted_by', 'email', 'isScam', 'public'
    ];
}
