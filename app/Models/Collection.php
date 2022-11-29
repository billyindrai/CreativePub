<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCollection',
        'titleCollection',
        'categoryCollection',
        'descriptionCollection',
        'tagsCollection',
        'contentCollection',
        'coverCollection',
        'likeCollection',
        'viewCollection',
        'draftStatusCollection',
        'idPengguna',
        'toolsCollection',
        'approvalCollection',

    ];

    protected $table = 'collection';
    protected $primaryKey = 'idCollection';

}
