<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monetize extends Model
{
    use HasFactory;

    protected $fillable = [
        'monetizeAmount',
        'idPengguna',
        'monetizeStatus',
    ];

    protected $table = 'monetize';
    protected $primaryKey = 'idMonetize';
}
