<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'bankBankAccount',
        'accountNumberBankAccount',
    ];

    protected $table = 'bank_account';
    protected $primaryKey = 'idBankAccount';

}
