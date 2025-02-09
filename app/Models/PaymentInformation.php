<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaPayment',
        'companyNamePayment',
        'countryPayment',
        'addressPayment',
        'cityPayment',
        'regionPayment',
        'postCodePayment',
        'idPayment'
    ];

    protected $table = 'info_payment';
    protected $primaryKey = 'idPayment';
}
