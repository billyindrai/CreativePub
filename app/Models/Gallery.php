<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'idGallery',
        'titleGallery',
        'categoryGallery',
        'descriptionGallery',
        'tagsGallery',
        'contentGallery',
        'coverGallery',
        'likeGallery',
        'viewGallery',
        'draftStatusGallery',
        'idPengguna',
        'toolsGallery',

    ];

    protected $table = 'gallery';
    protected $primaryKey = 'idGallery';
}
