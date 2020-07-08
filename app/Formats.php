<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formats extends Model
{
    //
    protected $table = 'formats';

    protected $fillable = [
        'submitted_by', 'format', 'heading', 'isScam', 'public'
    ];
}
