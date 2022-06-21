<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $connection = 'rama';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
