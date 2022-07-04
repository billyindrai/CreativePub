<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'titleJob',
        'toolsJob',
        'categoryJob',
        'tagsJob',
        'dueDateJob',
        'draftStatusJob',
        'idPengguna',
        'descriptionJob',
        'finishStatusJob',
    ];

    protected $table = 'job';
    protected $primaryKey = 'idJob';
}
