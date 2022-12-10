<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'statusPremiumRequest',
        'idPengguna',
    ];

    protected $table = 'premium_request';
    protected $primaryKey = 'idPremiumRequest';
}
