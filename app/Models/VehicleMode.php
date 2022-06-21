<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMode extends Model
{
    use HasFactory;

    protected $connection = 'rama';

    protected $table = 'modes';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
