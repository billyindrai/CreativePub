<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'statusMyJobs',
        'idJob',
        'idPengguna',
    ];
    protected $table = 'my_jobs';
    protected $primaryKey = 'idMyJobs';
}
